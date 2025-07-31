<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class TransacaoController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('cliente')->get();
        return view('transacoes', compact('vendas'));
    }
}
