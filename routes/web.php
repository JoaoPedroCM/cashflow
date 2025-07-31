<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\TransacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ===========================
// ROTAS DE AUTENTICAÇÃO
// ===========================

// Mostrar o formulário de login na raiz
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Processar o login
Route::post('/login', [AuthController::class, 'login']);

// Processar o logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ===========================
// ROTAS DIRETAS (sem lógica)
// ===========================

Route::get('/painel', function () {
    return view('painel');
})->middleware('auth');


// ===========================
// ROTAS COM CONTROLLER (com lógica)
// ===========================

Route::get('/transacoes', [TransacaoController::class, 'index'])->name('transacoes.index');
