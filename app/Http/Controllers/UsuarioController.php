<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::select('id', 'nome', 'email', 'numero', 'endereco', 'tipo_usuario', 'created_at', 'updated_at')->where('status', 'ativo')
            ->paginate(7);
        return view('usuarios', compact('usuarios'));
    }

    public function usuarios_inativos()
    {
        $usuarios_inativos = Usuario::select('id', 'nome', 'email', 'numero', 'endereco', 'tipo_usuario', 'created_at', 'updated_at')->where('status', 'inativo')
            ->paginate(7);
        return view('usuarios_inativos', compact('usuarios_inativos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('editar_usuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email',
            'numero' => 'required|string|max:20',
            'endereco' => 'nullable|string|max:255',
        ]);

        $usuario->nome = strtolower($this->removeAcentos($validated['nome']));
        $usuario->email = isset($validated['email']) ? strtolower($validated['email']) : null;
        $usuario->numero = $validated['numero'];
        $usuario->endereco = isset($validated['endereco']) ? strtolower($this->removeAcentos($validated['endereco'])) : null;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->status = "inativo";
        $usuario->save();
        return redirect()->back()->with('success', 'Usuário desativado com sucesso!');
    }

    public function reativar(Request $request, Usuario $usuario)
    {
        $usuario->status = "ativo";
        $usuario->save();
        return redirect()->back()->with('sucess', 'Usuário reativado!');
    }

    /**
     * Remove acentos e caracteres especiais da string.
     */
    private function removeAcentos($string)
    {
        $mapa = [
            'á' => 'a',
            'à' => 'a',
            'ã' => 'a',
            'â' => 'a',
            'ä' => 'a',
            'é' => 'e',
            'è' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'õ' => 'o',
            'ô' => 'o',
            'ö' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'û' => 'u',
            'ü' => 'u',
            'ç' => 'c',
            'Á' => 'a',
            'À' => 'a',
            'Ã' => 'a',
            'Â' => 'a',
            'Ä' => 'a',
            'É' => 'e',
            'È' => 'e',
            'Ê' => 'e',
            'Ë' => 'e',
            'Í' => 'i',
            'Ì' => 'i',
            'Î' => 'i',
            'Ï' => 'i',
            'Ó' => 'o',
            'Ò' => 'o',
            'Õ' => 'o',
            'Ô' => 'o',
            'Ö' => 'o',
            'Ú' => 'u',
            'Ù' => 'u',
            'Û' => 'u',
            'Ü' => 'u',
            'Ç' => 'c'
        ];

        return strtr($string, $mapa);
    }
}
