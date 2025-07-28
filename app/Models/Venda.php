<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

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
}
