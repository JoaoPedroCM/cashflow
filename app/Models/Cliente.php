<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'numero',
        'endereco',
        'status',
    ];

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
