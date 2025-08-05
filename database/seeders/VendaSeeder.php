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

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-10',
            'moeda' => 'BRL',
            'valor' => 149.90,
            'valor_convertido' => null,
            'descricao' => 'camiseta algodao premium',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 7,
            'data' => '2025-06-18',
            'moeda' => 'USD',
            'valor' => 59.99,
            'valor_convertido' => null,
            'descricao' => 'boné esportivo',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 2,
            'data' => '2025-07-16',
            'moeda' => 'BRL',
            'valor' => 659.90,
            'valor_convertido' => null,
            'descricao' => 'colete feminino nike',
            'forma_pgto' => 'em aberto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 5,
            'data' => '2025-07-05',
            'moeda' => 'EUR',
            'valor' => 129.00,
            'valor_convertido' => null,
            'descricao' => 'calca jeans escura',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 11,
            'data' => '2025-08-01',
            'moeda' => 'BRL',
            'valor' => 89.90,
            'valor_convertido' => null,
            'descricao' => 'camisa casual manga longa',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-20',
            'moeda' => 'USD',
            'valor' => 250.00,
            'valor_convertido' => null,
            'descricao' => 'jaqueta corta vento',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 8,
            'data' => '2025-06-28',
            'moeda' => 'BRL',
            'valor' => 199.90,
            'valor_convertido' => null,
            'descricao' => 'bolsa transversal couro sintetico',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 6,
            'data' => '2025-07-15',
            'moeda' => 'GBP',
            'valor' => 72.30,
            'valor_convertido' => null,
            'descricao' => 'oculos escuros feminino',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 14,
            'data' => '2025-07-12',
            'moeda' => 'BRL',
            'valor' => 105.00,
            'valor_convertido' => null,
            'descricao' => 'blusa gola alta',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-08-03',
            'moeda' => 'USD',
            'valor' => 499.00,
            'valor_convertido' => null,
            'descricao' => 'relógio esportivo digital',
            'forma_pgto' => 'em aberto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 17,
            'data' => '2025-07-30',
            'moeda' => 'EUR',
            'valor' => 64.40,
            'valor_convertido' => null,
            'descricao' => 'chinelo havaianas personalizado',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-01',
            'moeda' => 'BRL',
            'valor' => 299.99,
            'valor_convertido' => null,
            'descricao' => 'tenis casual urbano',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 19,
            'data' => '2025-06-22',
            'moeda' => 'USD',
            'valor' => 42.00,
            'valor_convertido' => null,
            'descricao' => 'regata treino academia',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 22,
            'data' => '2025-07-09',
            'moeda' => 'BRL',
            'valor' => 112.90,
            'valor_convertido' => null,
            'descricao' => 'camiseta dry fit',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 5,
            'data' => '2025-07-21',
            'moeda' => 'BRL',
            'valor' => 329.00,
            'valor_convertido' => null,
            'descricao' => 'moletom com capuz',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 21,
            'data' => '2025-07-11',
            'moeda' => 'USD',
            'valor' => 149.00,
            'valor_convertido' => null,
            'descricao' => 'bolsa tiracolo pequena',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 14,
            'data' => '2025-06-18',
            'moeda' => 'BRL',
            'valor' => 89.90,
            'valor_convertido' => null,
            'descricao' => 'bermuda jeans clara',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 10,
            'data' => '2025-07-27',
            'moeda' => 'EUR',
            'valor' => 175.00,
            'valor_convertido' => null,
            'descricao' => 'vestido midi florido',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 12,
            'data' => '2025-08-02',
            'moeda' => 'BRL',
            'valor' => 599.90,
            'valor_convertido' => null,
            'descricao' => 'tenis performance corrida',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 7,
            'data' => '2025-07-03',
            'moeda' => 'BRL',
            'valor' => 79.00,
            'valor_convertido' => null,
            'descricao' => 'cinto de couro marrom',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 16,
            'data' => '2025-06-30',
            'moeda' => 'USD',
            'valor' => 210.00,
            'valor_convertido' => null,
            'descricao' => 'mochila para notebook',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 18,
            'data' => '2025-07-06',
            'moeda' => 'GBP',
            'valor' => 95.70,
            'valor_convertido' => null,
            'descricao' => 'casaco leve masculino',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-07-22',
            'moeda' => 'BRL',
            'valor' => 49.99,
            'valor_convertido' => null,
            'descricao' => 'par de meias esportivas',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 20,
            'data' => '2025-07-19',
            'moeda' => 'BRL',
            'valor' => 239.00,
            'valor_convertido' => null,
            'descricao' => 'camisa social slim fit',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 4,
            'data' => '2025-07-04',
            'moeda' => 'EUR',
            'valor' => 310.00,
            'valor_convertido' => null,
            'descricao' => 'blazer casual masculino',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 13,
            'data' => '2025-06-24',
            'moeda' => 'USD',
            'valor' => 39.90,
            'valor_convertido' => null,
            'descricao' => 'camiseta regata basica',
            'forma_pgto' => 'paypal',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 9,
            'data' => '2025-07-17',
            'moeda' => 'BRL',
            'valor' => 199.90,
            'valor_convertido' => null,
            'descricao' => 'calca moletom masculina',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 23,
            'data' => '2025-07-13',
            'moeda' => 'USD',
            'valor' => 139.00,
            'valor_convertido' => null,
            'descricao' => 'sapato social preto',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 7,
            'data' => '2025-07-26',
            'moeda' => 'BRL',
            'valor' => 74.90,
            'valor_convertido' => null,
            'descricao' => 'cueca boxer pacote com 3',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 24,
            'data' => '2025-07-07',
            'moeda' => 'GBP',
            'valor' => 105.40,
            'valor_convertido' => null,
            'descricao' => 'casaco feminino inverno',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);
    }
}
