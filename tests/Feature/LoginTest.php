<?php

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Isso prepara o banco de dados (SQLite em memória) para cada teste
uses(RefreshDatabase::class);

test('a tela de login carrega corretamente', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

test('usuario consegue logar com credenciais validas', function () {
    // 1. Criamos um usuário de teste
    $usuario = Usuario::factory()->create([
        'senha' => '12345678',
    ]);

    // 2. Simulamos o preenchimento do formulário
    $response = $this->post('/login', [
        'email' => $usuario->email,
        'senha' => '12345678',
    ]);

    // 3. Verificamos se ele foi autenticado e redirecionado
    $this->assertAuthenticatedAs($usuario);
    $response->assertRedirect('/painel');
});

test('usuario nao consegue logar com senha incorreta', function () {
    $usuario = Usuario::factory()->create(['senha' => 'correta123']);

    $response = $this->post('/login', [
        'email' => $usuario->email,
        'senha' => 'senha-errada-456',
    ]);

    $this->assertGuest(); // Garante que NÃO está autenticado
});
