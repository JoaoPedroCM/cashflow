<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PainelController;

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

// Mostrar o formulário de login na raiz
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Processar o login
Route::post('/login', [AuthController::class, 'login']);

// Processar o logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Carrega a view painel
Route::get('/painel', function () {
    return view('painel');
})->middleware('auth');

Route::get('/painel', [PainelController::class, 'index'])->middleware('auth');
