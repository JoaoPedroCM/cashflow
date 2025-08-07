<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class TransacaoController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('cliente')
            ->orderBy('data', 'desc')->paginate(5);
        return view('transacoes', compact('vendas'));
    }
}
