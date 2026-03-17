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

    protected $fillable = ['nome', 'email', 'senha', 'numero', 'endereco', 'tipo_usuario', 'status'];

    protected $hidden = ['senha'];

    public function getAuthPassword()
    {
        return $this->senha;
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

    // Função para formatar o número do telefone
    public function getNumeroFormatadoAttribute()
    {
        $numero = preg_replace('/\D/', '', $this->numero); 

        if (strlen($numero) === 11) {
            return sprintf(
                '(%s) %s-%s',
                substr($numero, 0, 2),
                substr($numero, 2, 5),
                substr($numero, 7)
            );
        }

        return $this->numero;
    }
}
