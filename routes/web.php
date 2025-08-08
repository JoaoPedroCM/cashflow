<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransacaoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AvisoController;

// ROTAS DE AUTENTICAÇÃO
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ROTAS QUE EXIGEM AUTENTICAÇÃO
Route::middleware('auth')->group(function () {

    Route::get('/painel', function () {
        return view('painel');
    });

    Route::get('/novo_cliente', function () {
        return view('novo_cliente');
    });

    Route::get('/novo_usuario', function () {
        return view('novo_usuario');
    });

    Route::get('/novo_aviso', function () {
        return view('novo_aviso');
    });

    // TRANSAÇÕES
    Route::get('/transacoes', [TransacaoController::class, 'index'])->name('transacoes.index');
    Route::get('/baixa/{venda}', [TransacaoController::class, 'edit'])->name('transacao.edit');
    Route::put('/baixa/{venda}', [TransacaoController::class, 'update'])->name('transacoes.update');
    Route::get('/nova_transacao', [TransacaoController::class, 'create'])->name('transacoes.create');
    Route::post('/nova_transacao', [TransacaoController::class, 'store'])->name('transacoes.store');

    // CLIENTES
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/editar_cliente/{cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

    // CLIENTES INATIVOS
    Route::get('/clientes_inativos', [ClienteController::class, 'inativos'])->name('clientes.inativos');
    Route::put('/clientes_inativos/{cliente}', [ClienteController::class, 'reativar'])->name('clientes.reativar');

    // USUÁRIOS
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
    Route::get('/editar_usuario/{usuario}', [UsuarioController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

    // USUÁRIOS INATIVOS
    Route::get('/usuarios_inativos', [UsuarioController::class, 'usuarios_inativos'])->name('usuarios_inativos.usuarios_inativos');
    Route::put('/usuarios_inativos/{usuario}', [UsuarioController::class, 'reativar'])->name('usuarios.reativar');

    // AVISOS
    Route::get('/avisos', [AvisoController::class, 'index'])->name('avisos.index');
    Route::get('/aviso/{id}', [AvisoController::class, 'show'])->name('aviso.show');
    Route::post('/novo_aviso', [AvisoController::class, 'store'])->name('avisos.store');
});
