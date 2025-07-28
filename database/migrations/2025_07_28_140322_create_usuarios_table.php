<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); //identificador do usuário
            $table->string('nome'); //nome do usuário
            $table->string('email')->unique(); //email do usuário (valor único)
            $table->string('senha'); //senha de login do usuario
            $table->string('numero'); //número de telefone do usuário
            $table->string('endereco'); //endereço do usuário
            $table->string('tipo_usuario'); //tipo de usuário (Ex: administrador, comum, etc...)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
