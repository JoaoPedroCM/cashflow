<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso;

class AvisoController extends Controller
{
    // Listar todos os avisos
    public function index()
    {
        $avisos = Aviso::select('id', 'assunto', 'created_at')->paginate(5);
        return view('avisos', compact('avisos'));
    }

    // Criar um novo aviso
    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'aviso' => 'required|string',
        ]);

        $aviso = Aviso::create([
            'assunto' => $request->assunto,
            'aviso' => $request->aviso,
        ]);

        return response()->json($aviso, 201);
    }

    // Mostrar um aviso individual
    public function show($id)
    {
        $aviso = Aviso::findOrFail($id);

        return view('aviso', compact('aviso'));
    }
}
