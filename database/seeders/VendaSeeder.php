<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venda;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-07-29', // formato YYYY-MM-DD,
            'moeda' => 'BRL',
            'valor' => 1989.90,
            'valor_convertido' => null,
            'descricao' => 'smartphone xiaomi poco x6',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 2,
            'data' => '2025-07-10', // formato YYYY-MM-DD,
            'moeda' => 'BRL',
            'valor' => 129.90,
            'valor_convertido' => null,
            'descricao' => 'garrafa termica termolar',
            'forma_pgto' => 'dinheiro',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 2,
            'data' => '2025-07-16', // formato YYYY-MM-DD,
            'moeda' => 'BRL',
            'valor' => 659.90,
            'valor_convertido' => null,
            'descricao' => 'colete feminino nike',
            'forma_pgto' => 'em aberto',
            'status' => 'pendente',
        ]);
    }
}
