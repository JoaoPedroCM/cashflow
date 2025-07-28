<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AuthController extends Controller
{
    // Mostra o formulário de login
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect('/painel');
        }
        return view('login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        // Busca usuário pelo email
        $usuario = Usuario::where('email', $credentials['email'])->first();

        if ($usuario && password_verify($credentials['senha'], $usuario->senha)) {
            // Loga o usuário manualmente
            auth()->login($usuario);

            // Redireciona para o painel SEM erro
            return redirect('/painel');
        }

        // Login falhou, retorna com erro
        return back()->with('erro', 'E-mail ou senha incorretos')->withInput();
    }


    // Logout
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
