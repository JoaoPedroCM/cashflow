<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransacaoController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/novo_cliente', function () {
    return view('novo_cliente');
});


// ===========================
// ROTAS COM CONTROLLER (com lógica)
// ===========================

#TRANSAÇÕES
Route::get('/transacoes', [TransacaoController::class, 'index'])->name('transacoes.index');

#CLIENTES
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('/editar_cliente/{cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');


#CLIENTES INATIVOS
Route::get('/clientes_inativos', [ClienteController::class, 'inativos'])->name('clientes.inativos');
Route::put('/clientes_inativos/{cliente}', [ClienteController::class, 'reativar'])->name('clientes.reativar');

#USUÁRIOS
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
