<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AlteracoesController extends Controller
{
    public function index()
    {
        $logs = Audit::with('usuario')->orderBy('created_at', 'desc')->paginate(6);
        return view('alteracoes', compact('logs'));
    }
}
