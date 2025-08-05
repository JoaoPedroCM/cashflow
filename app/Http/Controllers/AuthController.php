<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    // Mostra o formulário de login
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/painel');
        }

        return view('login');
    }

    // Processa o login
    public function login(Request $request)
    {
        // Validação dos dados de entrada
        $credentials = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        // Busca o usuário pelo e-mail
        $usuario = Usuario::where('email', $credentials['email'])->first();

        // Verifica se o usuário existe
        if (!$usuario) {
            return back()->with('erro', 'E-mail ou senha incorretos')->withInput();
        }

        // Verifica se o usuário está ativo
        if ($usuario->status !== 'ativo') {
            return back()->with('erro', 'O administrador do sistema removeu o seu acesso!');
        }

        // Verifica se a senha está correta
        if (!password_verify($credentials['senha'], $usuario->senha)) {
            return back()->with('erro', 'E-mail ou senha incorretos')->withInput();
        }

        // Login manual do usuário
        Auth::login($usuario);
        $request->session()->regenerate(); // Protege contra session fixation

        return redirect('/painel');
    }

    // Realiza o logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
