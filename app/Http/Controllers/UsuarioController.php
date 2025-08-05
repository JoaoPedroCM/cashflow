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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
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
}
