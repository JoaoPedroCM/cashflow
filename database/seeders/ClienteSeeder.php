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
            'nome' => 'ademir santos',
            'email' => 'ademirsantos@exemplo.com',
            'numero' => '11940404040',
            'endereco' => 'avenida marlon andrade, 973',
        ]);

        Cliente::create([
            'nome' => 'marcia lemes',
            'email' => 'marcialemes@exemplo.com',
            'numero' => '11960606060',
            'endereco' => 'rua paulo souza, 137',
        ]);

        Cliente::create([
            'nome' => 'rosangela pereira',
            'email' => 'rosangelapereira@exemplo.com',
            'numero' => '41950505050',
            'endereco' => 'avenida marlon andrade, 163',
        ]);
    }
}
