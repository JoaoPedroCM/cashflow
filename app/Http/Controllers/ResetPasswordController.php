<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\Usuario;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('resetar_senha_token', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $status = Password::broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->senha = $password;
                $user->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return back()->with('status', 'Senha alterada com sucesso! Agora você pode fazer login.');
        } else {
            return back()->withErrors(['email' => [__($status)]]);
        }
    }
}
