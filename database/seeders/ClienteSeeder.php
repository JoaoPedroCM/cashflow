<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Ademir Santos',
            'email' => 'ademirsantos@exemplo.com',
            'numero' => '940404040',
            'endereco' => 'Avenida Marlon Andrade, 973',
        ]);

        Cliente::create([
            'nome' => 'Marcia Lemes',
            'email' => 'marcialemes@exemplo.com',
            'numero' => '960606060',
            'endereco' => 'Rua Paulo Souza, 137',
        ]);

        Cliente::create([
            'nome' => 'Rosangela Pereira',
            'email' => 'rosangelapereira@exemplo.com',
            'numero' => '950505050',
            'endereco' => 'Avenida Marlon Andrade, 163',
        ]);
    }
}
