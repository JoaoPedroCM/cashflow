<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nome' => 'Master',
            'email' => 'master@exemplo.com',
            'senha' => 'master123',
            'numero' => '999999999',
            'endereco' => 'Rua Principal, 123',
            'tipo_usuario' => 'administrador',
        ]);

        Usuario::create([
            'nome' => 'Henry Santos',
            'email' => 'henrysantos@exemplo.com',
            'senha' => 'henry123',
            'numero' => '999999999',
            'endereco' => 'Rua Alameda, 123',
            'tipo_usuario' => 'auxiliar',
        ]);

        Usuario::create([
            'nome' => 'Rosa Andrade',
            'email' => 'rosaandrade@exemplo.com',
            'senha' => 'rosa123',
            'numero' => '999999999',
            'endereco' => 'Avenida Senador Marcos Costa, 321',
            'tipo_usuario' => 'funcionario',
        ]);
    }
}
