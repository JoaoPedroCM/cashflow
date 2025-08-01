@extends('site/layout')

@section('title', 'Usuarios')

@section('content')
    <h1 class="display-6">Usuários</h1>
    

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
                <td><a href="" title="Editar cliente"><i class="bi bi-pencil-square text-primary"></i></a></td>
                <td><a href="" title="Excluir cliente"><i class="bi bi-trash3-fill text-danger"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
