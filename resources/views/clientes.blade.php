@extends('site/layout')

@section('title', 'Clientes')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <h1 class="display-6">Clientes
        <a href="novo_cliente" class="btn btn-success">
            Novo Cliente<i class="bi bi-plus"></i>
        </a>
    </h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
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
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->numero_formatado}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->created_at_formatado}}</td>
                <td>{{$cliente->updated_at_formatado}}</td>

                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" title="Editar cliente" onclick="return confirm('Editar os dados de {{$cliente->nome}} ?');" class="btn btn-link p-0">
                        <i class="bi bi-pencil-square text-primary"></i>
                    </a>
                </td>

                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja desativar este cliente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link p-0" title="Desativar cliente">
                            <i class="bi bi-trash3-fill text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $clientes->links('pagination::bootstrap-4') }}
    </div>
@endsection
