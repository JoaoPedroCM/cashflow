@extends('site/layout')

@section('title', 'Clientes')

@section('content')
    <h1 class="display-6">Clientes</h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-primary">ID</th>
                <th class="text-primary">Nome</th>
                <th class="text-primary">Email</th>
                <th class="text-primary">Número</th>
                <th class="text-primary">Endereço</th>
                <th class="text-primary">Data Cadastro</th>
                <th class="text-primary">Data Alteração</th>
                <th colspan="2" class="text-primary">Opções</th>
            </tr>
        </thead>
        
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->numero_formatado}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->created_at_formatado}}</td>
                <td>{{$cliente->updated_at_formatado}}</td>
                <td><a href="" title="Editar cliente"><i class="bi bi-pencil-square text-primary"></i></a></td>
                <td><a href="" title="Excluir cliente"><i class="bi bi-trash3-fill text-danger"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
