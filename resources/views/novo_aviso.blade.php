@extends('site/layout')

@section('title', 'Novo Aviso')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    

    <main class="d-flex justify-content-center align-items-center flex-grow-1">
    <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
        <h3 class="text-center mb-4">Redigir Aviso</h3>
        <form method="POST" action="{{ route('avisos.store') }}">
            @csrf

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" required autofocus>
            </div>

            <div class="mb-3">
                <label for="aviso" class="form-label">Aviso</label>
                <textarea class="form-control" id="aviso" name="aviso" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar Aviso</button>
        </form>
    </div>
</main>


@endsection
