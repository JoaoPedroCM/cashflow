@extends('site/layout')

@section('title', 'Avisos')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <h1 class="display-6">Avisos
        @if(Auth::user()->tipo_usuario === 'master')
            <a href="novo_aviso" class="btn btn-success">
                Novo Aviso<i class="bi bi-plus"></i>
            </a>
        @endif
    </h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-primary">Assunto</th>
                <th class="text-primary">Data Postagem</th>
            </tr>
        </thead>
        
        @foreach ($avisos as $aviso)
            <tr>
                <td><a href="{{ route('aviso.show', $aviso->id) }}">{{ $aviso->assunto }}</a></td>
                <td>{{$aviso->created_at}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $avisos->links('pagination::bootstrap-4') }}
    </div>
@endsection
