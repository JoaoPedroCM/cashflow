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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //identificador do cliente
            $table->string('nome'); //nome do cliente
            $table->string('email')->nullable(); //email do cliente (opcional)
            $table->string('numero'); //número do cliente
            $table->text('endereco')->nullable(); //endereço do cliente (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
