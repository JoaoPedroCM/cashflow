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
        Schema::table('clientes', function (Blueprint $table) {

            /*Esta coluna será usada para definir o cliente como ativo ou não
            de acordo com a regra de negócio pensada e estabelecida. Desta forma,
            será possível manter o histórico de transações do mesmo, ainda que 
            já não seja mais um cliente ativo.*/

            $table->string('status')->default('ativo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
