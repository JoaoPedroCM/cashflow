<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AlteracoesController extends Controller
{
    public function index()
    {
        $logs = Audit::with('usuario')->latest()->paginate(20);
        return view('alteracoes', compact('logs'));
    }
}
