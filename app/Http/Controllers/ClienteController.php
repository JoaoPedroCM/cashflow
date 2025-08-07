<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::select('id', 'nome', 'email', 'numero', 'endereco', 'created_at', 'updated_at')
            ->where('status', 'ativo')->orderBy('nome', 'asc')
            ->paginate(7);

        return view('clientes', compact('clientes'));
    }


    public function inativos()
    {
        $clientes_inativos = Cliente::select('id', 'nome', 'email', 'numero', 'endereco', 'created_at', 'updated_at')
            ->where('status', 'inativo')->orderBy('nome', 'asc')->paginate(7);
        return view('clientes_inativos', compact('clientes_inativos'));
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
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email',
            'numero' => 'required|string|max:20',
            'endereco' => 'nullable|string|max:255',
        ]);

        $data = [];
        $data['nome'] = strtolower($this->removeAcentos($validated['nome']));
        $data['email'] = isset($validated['email']) ? strtolower($validated['email']) : null;
        $data['numero'] = $validated['numero']; // Não modifica número
        $data['endereco'] = isset($validated['endereco']) ? strtolower($this->removeAcentos($validated['endereco'])) : null;

        Cliente::create($data);

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('editar_cliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email',
            'numero' => 'required|string|max:20',
            'endereco' => 'nullable|string|max:255',
        ]);

        $cliente->nome = strtolower($this->removeAcentos($validated['nome']));
        $cliente->email = isset($validated['email']) ? strtolower($validated['email']) : null;
        $cliente->numero = $validated['numero'];
        $cliente->endereco = isset($validated['endereco']) ? strtolower($this->removeAcentos($validated['endereco'])) : null;
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }


    public function reativar(Request $request, Cliente $cliente)
    {
        $cliente->status = "ativo";
        $cliente->save();
        return redirect()->back()->with('sucess', 'Cliente reativado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->status = "inativo";
        $cliente->save();
        return redirect()->back()->with('success', 'Cliente desativado com sucesso!');
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
