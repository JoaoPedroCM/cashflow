@extends('site/layout')

@section('title', 'Clientes Inativos')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <h1 class="display-6">Clientes Inativos</h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-primary">Nome</th>
                <th class="text-primary">Email</th>
                <th class="text-primary">Número</th>
                <th class="text-primary">Endereço</th>
                <th class="text-primary">Data Cadastro</th>
                <th class="text-primary">Data Alteração</th>
                <th class="text-primary">Opções</th>
            </tr>
        </thead>
        
        @foreach ($clientes_inativos as $cliente)
            <tr>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->numero_formatado}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->created_at_formatado}}</td>
                <td>{{$cliente->updated_at_formatado}}</td>
                <td>
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" onsubmit="return confirm('Reativar este cliente?');">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-link p-0" title="Reativar cliente">
                            <i class="bi bi-plugin text-primary"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
