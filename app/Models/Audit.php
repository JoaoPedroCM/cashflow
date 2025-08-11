<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $table = 'audits';

    protected $fillable = [
        'id_usuario',
        'tipo_modelo',
        'id_modelo',
        'operacao',
        'valores_anteriores',
        'valores_novos',
    ];

    protected $casts = [
        'valores_anteriores' => 'array',
        'valores_novos' => 'array',
    ];

    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario');
    }
}
