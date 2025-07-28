<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

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
}
