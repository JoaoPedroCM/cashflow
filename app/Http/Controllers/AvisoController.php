<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso;

class AvisoController extends Controller
{
    public function index()
    {
        $avisos = Aviso::select('id', 'assunto', 'created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('avisos', compact('avisos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required|string|max:255',
            'aviso' => 'required|string',
        ]);

        Aviso::create([
            'assunto' => $request->assunto,
            'aviso' => $request->aviso,
        ]);

        return redirect()->route('avisos.index')->with('success', 'Aviso enviado!');
    }

    public function show($id)
    {
        $aviso = Aviso::findOrFail($id);

        return view('aviso', compact('aviso'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
