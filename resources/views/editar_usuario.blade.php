@extends('site/layout')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar Usuário</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $usuario->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $usuario->email) }}">
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name="numero" id="numero" class="form-control" value="{{ old('numero', $usuario->numero) }}" required>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" value="{{ old('endereco', $usuario->endereco) }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
