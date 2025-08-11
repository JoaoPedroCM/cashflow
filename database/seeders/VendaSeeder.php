<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venda;

class VendaSeeder extends Seeder
{
    // Cotação em 11/08/25
    // Os novos registros armazenarão a conversão do dia na coluna valor_convertido
    private $cotacoes = [
        'USD' => 5.44,
        'EUR' => 6.32,
        'GBP' => 7.30,
        'BRL' => 1.00,
    ];

    private function converterParaBRL($moeda, $valor)
    {
        // Arredonda valor seguinto a cotação definida
        return round($valor * ($this->cotacoes[$moeda] ?? 1), 2);
    }

    public function run(): void
    {
        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-07-29',
            'moeda' => 'BRL',
            'valor' => 1989.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 1989.90),
            'descricao' => 'smartphone xiaomi poco x6',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 2,
            'data' => '2025-07-10',
            'moeda' => 'BRL',
            'valor' => 129.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 129.90),
            'descricao' => 'garrafa termica termolar',
            'forma_pgto' => 'dinheiro',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 2,
            'data' => '2025-07-16',
            'moeda' => 'BRL',
            'valor' => 659.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 659.90),
            'descricao' => 'colete feminino nike',
            'forma_pgto' => 'em aberto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-10',
            'moeda' => 'BRL',
            'valor' => 149.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 149.90),
            'descricao' => 'camiseta algodao premium',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 7,
            'data' => '2025-06-18',
            'moeda' => 'USD',
            'valor' => 59.99,
            'valor_convertido' => $this->converterParaBRL('USD', 59.99),
            'descricao' => 'bone esportivo',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 5,
            'data' => '2025-07-05',
            'moeda' => 'EUR',
            'valor' => 129.00,
            'valor_convertido' => $this->converterParaBRL('EUR', 129.00),
            'descricao' => 'calca jeans escura',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 11,
            'data' => '2025-08-01',
            'moeda' => 'BRL',
            'valor' => 89.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 89.90),
            'descricao' => 'camisa casual manga longa',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-20',
            'moeda' => 'USD',
            'valor' => 250.00,
            'valor_convertido' => $this->converterParaBRL('USD', 250.00),
            'descricao' => 'jaqueta corta vento',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 8,
            'data' => '2025-06-28',
            'moeda' => 'BRL',
            'valor' => 199.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 199.90),
            'descricao' => 'bolsa transversal couro sintetico',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 6,
            'data' => '2025-07-15',
            'moeda' => 'GBP',
            'valor' => 72.30,
            'valor_convertido' => $this->converterParaBRL('GBP', 72.30),
            'descricao' => 'oculos escuros feminino',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 14,
            'data' => '2025-07-12',
            'moeda' => 'BRL',
            'valor' => 105.00,
            'valor_convertido' => $this->converterParaBRL('BRL', 105.00),
            'descricao' => 'blusa gola alta',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-08-03',
            'moeda' => 'USD',
            'valor' => 499.00,
            'valor_convertido' => $this->converterParaBRL('USD', 499.00),
            'descricao' => 'relogio esportivo digital',
            'forma_pgto' => 'em aberto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 17,
            'data' => '2025-07-30',
            'moeda' => 'EUR',
            'valor' => 64.40,
            'valor_convertido' => $this->converterParaBRL('EUR', 64.40),
            'descricao' => 'chinelo havaianas personalizado',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 3,
            'data' => '2025-07-01',
            'moeda' => 'BRL',
            'valor' => 299.99,
            'valor_convertido' => $this->converterParaBRL('BRL', 299.99),
            'descricao' => 'tenis casual urbano',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 19,
            'data' => '2025-06-22',
            'moeda' => 'USD',
            'valor' => 42.00,
            'valor_convertido' => $this->converterParaBRL('USD', 42.00),
            'descricao' => 'regata treino academia',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 22,
            'data' => '2025-07-09',
            'moeda' => 'BRL',
            'valor' => 112.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 112.90),
            'descricao' => 'camiseta dry fit',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 5,
            'data' => '2025-07-21',
            'moeda' => 'BRL',
            'valor' => 329.00,
            'valor_convertido' => $this->converterParaBRL('BRL', 329.00),
            'descricao' => 'moletom com capuz',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 21,
            'data' => '2025-07-11',
            'moeda' => 'USD',
            'valor' => 149.00,
            'valor_convertido' => $this->converterParaBRL('USD', 149.00),
            'descricao' => 'bolsa tiracolo pequena',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 14,
            'data' => '2025-06-18',
            'moeda' => 'BRL',
            'valor' => 89.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 89.90),
            'descricao' => 'bermuda jeans clara',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 10,
            'data' => '2025-07-27',
            'moeda' => 'EUR',
            'valor' => 175.00,
            'valor_convertido' => $this->converterParaBRL('EUR', 175.00),
            'descricao' => 'vestido midi florido',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 12,
            'data' => '2025-08-02',
            'moeda' => 'BRL',
            'valor' => 599.90,
            'valor_convertido' => $this->converterParaBRL('BRL', 599.90),
            'descricao' => 'tenis performance corrida',
            'forma_pgto' => 'pix',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 7,
            'data' => '2025-07-03',
            'moeda' => 'BRL',
            'valor' => 79.00,
            'valor_convertido' => $this->converterParaBRL('BRL', 79.00),
            'descricao' => 'cinto de couro marrom',
            'forma_pgto' => 'boleto',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 16,
            'data' => '2025-06-30',
            'moeda' => 'USD',
            'valor' => 210.00,
            'valor_convertido' => $this->converterParaBRL('USD', 210.00),
            'descricao' => 'mochila para notebook',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 18,
            'data' => '2025-07-06',
            'moeda' => 'GBP',
            'valor' => 95.70,
            'valor_convertido' => $this->converterParaBRL('GBP', 95.70),
            'descricao' => 'casaco leve masculino',
            'forma_pgto' => 'paypal',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 1,
            'data' => '2025-07-22',
            'moeda' => 'BRL',
            'valor' => 49.99,
            'valor_convertido' => $this->converterParaBRL('BRL', 49.99),
            'descricao' => 'par de meias esportivas',
            'forma_pgto' => 'pix',
            'status' => 'pendente',
        ]);

        Venda::create([
            'id_cliente' => 20,
            'data' => '2025-07-19',
            'moeda' => 'BRL',
            'valor' => 239.00,
            'valor_convertido' => $this->converterParaBRL('BRL', 239.00),
            'descricao' => 'camisa social slim fit',
            'forma_pgto' => 'credito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 4,
            'data' => '2025-07-04',
            'moeda' => 'EUR',
            'valor' => 310.00,
            'valor_convertido' => $this->converterParaBRL('EUR', 310.00),
            'descricao' => 'blazer casual masculino',
            'forma_pgto' => 'debito',
            'status' => 'pago',
        ]);

        Venda::create([
            'id_cliente' => 13,
            'data' => '2025-06-24',
            'moeda' => 'USD',
            'valor' => 39.90,
            'valor_convertido' => $this->converterParaBRL('USD', 39.90),
            'descricao' => 'camiseta regata basica',
            'forma_pgto' => 'paypal',
            'status' => 'pendente',
        ]);
    }
}
