<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Aviso;

class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aviso::create([
            'assunto' => 'Bem-vindo ao Sistema',
            'aviso' => 'Este é um aviso inicial para informar que o sistema está funcionando corretamente. Fique atento aos comunicados futuros aqui nesta seção.'
        ]);
    }
}
