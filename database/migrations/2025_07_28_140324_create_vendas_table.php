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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id(); //identificador da transação
            $table->foreignId('id_cliente')->constrained('clientes')->onDelete('cascade');
            $table->date('data'); //data da transação
            $table->string('moeda')->default('BRL'); //moeda usada na transação
            $table->decimal('valor', 10, 2); //valor da transação
            $table->decimal('valor_convertido', 10, 2)->nullable(); //valor convertido em BRL
            $table->text('descricao')->nullable(); //descrição da transação (opcional)
            $table->string('forma_pgto'); //forma de pagamento usada na transação
            $table->string('status'); //status da transação (Ex: Pendente, Pago, etc...)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
