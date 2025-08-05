@extends('site/layout')

@section('title', 'Usuarios')

@section('content')
    <h1 class="display-6">Usuários
        <a href="novo_usuario" class="btn btn-success">
            Novo Usuário<i class="bi bi-plus"></i>
        </a>
    </h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-primary">Nome</th>
                <th class="text-primary">Email</th>
                <th class="text-primary">Número</th>
                <th class="text-primary">Endereço</th>
                <th class="text-primary">Tipo Usuário</th>
                <th class="text-primary">Data Cadastro</th>
                <th class="text-primary">Data Alteração</th>
                <th colspan="2" class="text-primary">Opções</th>
            </tr>
        </thead>
        
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->numero_formatado}}</td>
                <td>{{$usuario->endereco}}</td>
                <td>{{$usuario->tipo_usuario}}</td>
                <td>{{$usuario->created_at_formatado}}</td>
                <td>{{$usuario->updated_at_formatado}}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" title="Editar usuário" onclick="return confirm('Editar os dados de {{$usuario->nome}} ?');" class="btn btn-link p-0">
                        <i class="bi bi-pencil-square text-primary"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja desativar este usuário?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link p-0" title="Desativar usuário">
                            <i class="bi bi-trash3-fill text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $usuarios->links('pagination::bootstrap-4') }}
    </div>
@endsection
