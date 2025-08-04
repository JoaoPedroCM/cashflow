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
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'marcia lemes',
            'email' => 'marcialemes@exemplo.com',
            'numero' => '11960606060',
            'endereco' => 'rua paulo souza, 137',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'rosangela pereira',
            'email' => 'rosangelapereira@exemplo.com',
            'numero' => '41950505050',
            'endereco' => 'avenida marlon andrade, 163',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'antonio marques',
            'email' => 'antoniomarques@exemplo.com',
            'numero' => '47973737373',
            'endereco' => 'avenida republica velha, 243',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'marcos silva',
            'email' => 'marcossilva@exemplo.com',
            'numero' => '41912345678',
            'endereco' => 'rua das flores, 45',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'ana carolina',
            'email' => 'anacarolina@exemplo.com',
            'numero' => '41987654321',
            'endereco' => 'rua dos pinheiros, 123',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'joão pedro',
            'email' => 'joaopedro@exemplo.com',
            'numero' => '41999887766',
            'endereco' => 'avenida brasil, 500',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'larissa mendes',
            'email' => 'larissamendes@exemplo.com',
            'numero' => '41911223344',
            'endereco' => 'travessa das laranjeiras, 78',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'pedro henrique',
            'email' => 'pedrohenrique@exemplo.com',
            'numero' => '41944332211',
            'endereco' => 'rua alvorada, 99',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'camila rodrigues',
            'email' => 'camilarodrigues@exemplo.com',
            'numero' => '41955667788',
            'endereco' => 'avenida sete de setembro, 250',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'rafael costa',
            'email' => 'rafaelcosta@exemplo.com',
            'numero' => '41966778899',
            'endereco' => 'rua do sol, 147',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'juliana alves',
            'email' => 'julianaalves@exemplo.com',
            'numero' => '41977889900',
            'endereco' => 'rua primavera, 32',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'guilherme ferreira',
            'email' => 'guilhermeferreira@exemplo.com',
            'numero' => '41988990011',
            'endereco' => 'avenida das americas, 404',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'paula dias',
            'email' => 'pauladias@exemplo.com',
            'numero' => '41999001122',
            'endereco' => 'rua verde, 11',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'andré lopes',
            'email' => 'andrelopes@exemplo.com',
            'numero' => '41910111213',
            'endereco' => 'rua das acácias, 78',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'letícia santos',
            'email' => 'leticiasantos@exemplo.com',
            'numero' => '41914151617',
            'endereco' => 'avenida central, 99',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'bruno marques',
            'email' => 'brunomarques@exemplo.com',
            'numero' => '41918192021',
            'endereco' => 'rua das oliveiras, 65',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'mariana passos',
            'email' => 'marianapassos@exemplo.com',
            'numero' => '41922232425',
            'endereco' => 'rua beija-flor, 34',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'felipe ramos',
            'email' => 'feliperamos@exemplo.com',
            'numero' => '41926272829',
            'endereco' => 'avenida ipiranga, 75',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'renata pereira',
            'email' => 'renatapereira@exemplo.com',
            'numero' => '41930313233',
            'endereco' => 'rua do limoeiro, 12',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'luiz carlos',
            'email' => 'luizcarlos@exemplo.com',
            'numero' => '41934353637',
            'endereco' => 'rua nova, 89',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'priscila gomes',
            'email' => 'priscilagomes@exemplo.com',
            'numero' => '41938394041',
            'endereco' => 'avenida santa maria, 210',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'daniel souza',
            'email' => 'danielsouza@exemplo.com',
            'numero' => '41942434445',
            'endereco' => 'rua bela vista, 22',
            'status' => 'ativo',
        ]);

        Cliente::create([
            'nome' => 'carolina melo',
            'email' => 'carolinamelo@exemplo.com',
            'numero' => '41946474849',
            'endereco' => 'rua das cerejeiras, 77',
            'status' => 'ativo',
        ]);
    }
}
