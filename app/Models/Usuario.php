<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nome', 'email', 'senha', 'numero', 'endereco', 'tipo_usuario'];

    protected $hidden = ['senha'];

    // Mutator para encriptar a senha ao salvar
    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function logout()
    {
        Auth::logout(); // Desloga o usuário da sessão

        return redirect('/'); // Redireciona para a página de login (raiz)
    }

    // Função para converter o padrão de data americano para o brasileiro
    public function getCreatedAtFormatadoAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function getUpdatedAtFormatadoAttribute()
    {
        return Carbon::parse($this->updated_at)->format('d/m/Y');
    }

    //Função para formatar o número do telefone do cliente e melhorar a exibição
    public function getNumeroFormatadoAttribute()
    {
        $numero = preg_replace('/\D/', '', $this->numero); // remove tudo que não é número

        if (strlen($numero) === 11) {
            return sprintf(
                '(%s) %s-%s',
                substr($numero, 0, 2),     // DDD
                substr($numero, 2, 5),     // Prefixo
                substr($numero, 7)         // Sufixo
            );
        }

        // Caso o número esteja fora do padrão esperado
        return $this->numero;
    }
}
