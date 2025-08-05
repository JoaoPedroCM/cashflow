@extends('site/layout')

@section('title', 'Usuarios')

@section('content')
    <h1 class="display-6">Usuários Inativos</h1>
    

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
                <th class="text-primary">Opções</th>
            </tr>
        </thead>
        
        @foreach ($usuarios_inativos as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->numero_formatado}}</td>
                <td>{{$usuario->endereco}}</td>
                <td>{{$usuario->tipo_usuario}}</td>
                <td>{{$usuario->created_at_formatado}}</td>
                <td>{{$usuario->updated_at_formatado}}</td>
                <td>
                    <form action="{{ route('usuarios.reativar', $usuario->id) }}" method="POST" onsubmit="return confirm('Reativar {{$usuario->nome}}?');">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-link p-0" title="Reativar usuário">
                            <i class="bi bi-plugin text-primary"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $usuarios_inativos->links('pagination::bootstrap-4') }}
    </div>
@endsection
