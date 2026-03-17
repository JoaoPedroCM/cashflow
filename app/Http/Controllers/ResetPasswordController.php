<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token = null)
    {
        return view('resetar_senha_token')->with([
            'token' => $token, 
            'email' => $request->email
        ]);
    }

    public function reset(Request $request)
    {
        // A regra 'confirmed' exige que exista um campo 'password_confirmation' igual
        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:6|confirmed', 
        ], [
            'password.confirmed' => 'As senhas digitadas não coincidem.',
            'password.min'       => 'A senha deve ter pelo menos 6 caracteres.',
        ]);

        $record = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$record) {
            return back()->withErrors(['email' => 'Token de recuperação inválido ou expirado.']);
        }

        $usuario = Usuario::where('email', $request->email)->first();
        
        if ($usuario) {
            // Atualiza a senha
            $usuario->senha = Hash::make($request->password); 
            $usuario->save();

            // Deleta o token para que não seja usado novamente
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            return redirect()->route('login')->with('status', 'Senha redefinida com sucesso!');
        }

        return back()->withErrors(['email' => 'Usuário não encontrado.']);
    }
}
