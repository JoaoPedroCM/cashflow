<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        // Tabela de auditoria que armazenará dados das operações realizadas.
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->string('tipo_modelo');
            $table->unsignedBigInteger('id_modelo');
            $table->string('operacao');
            $table->json('valores_anteriores')->nullable();
            $table->json('valores_novos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
