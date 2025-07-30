<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use Carbon\Carbon;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'data',
        'moeda',
        'valor',
        'valor_convertido',
        'descricao',
        'forma_pgto',
        'status',
    ];

    protected $casts = [
        'data' => 'date',
        'valor' => 'decimal:2',
        'valor_convertido' => 'decimal:2',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Função para converter o padrão de data americano para o brasileiro
    public function getDataFormatadaAttribute()
    {
        return Carbon::parse($this->data)->format('d/m/Y');
    }
}
