<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('redefinir_senha');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // 1. Validação do campo e-mail
        $request->validate(['email' => 'required|email']);
        
        $email = $request->email;
        $token = Str::random(64);

        // 2. Gravando o token no banco de dados
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            ['email' => $email, 'token' => $token, 'created_at' => now()]
        );

        // 3. Gerando o link de redefinição
        $resetLink = route('password.reset', ['token' => $token, 'email' => $email]);

        try {
            // 4. Enviando o e-mail usando o SMTP configurado no .env
            Mail::send([], [], function ($message) use ($email, $resetLink) {
                $message->to($email)
                    ->subject('Recuperação de Senha - CashFlow')
                    ->html("
                        <div style='font-family: Arial, sans-serif; color: #333;'>
                            <h3>Recuperação de Senha - CashFlow</h3>
                            <p>Você solicitou a redefinição de senha para sua conta.</p>
                            <p>Clique no botão abaixo para criar uma nova senha:</p>
                            <div style='margin: 20px 0;'>
                                <a href='$resetLink' style='background-color: #4CAF50; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold;'>Redefinir Minha Senha</a>
                            </div>
                            <p>Se o botão acima não funcionar, copie e cole o link abaixo no seu navegador:</p>
                            <p style='color: #666;'>$resetLink</p>
                            <hr style='border: 0; border-top: 1px solid #eee; margin-top: 20px;'>
                            <p style='font-size: 12px; color: #999;'>Se você não solicitou esta alteração, ignore este e-mail.</p>
                        </div>
                    ");
            });

            return back()->with('status', 'Link enviado com sucesso! Verifique sua caixa de entrada.');

        } catch (\Exception $e) {
            // Caso ocorra erro de conexão com o Brevo ou credenciais incorretas
            dd([
                'ERRO' => 'FALHA_NO_ENVIO_SMTP',
                'MENSAGEM' => $e->getMessage(),
                'DICA' => 'Verifique se rodou "php artisan config:clear" após alterar o .env'
            ]);
        }
    }
}
