@extends('site/layout')

@section('title', 'Aviso')

@section('content')

    <h1 class="display-6">{{ $aviso->assunto }}</h1>

    <p class="text-muted">Publicado em {{ $aviso->created_at->format('d/m/Y H:i') }}</p>

    <div class="mb-3">
        <textarea class="form-control" rows="10" readonly>{{ $aviso->aviso }}</textarea>
    </div>

    <a href="{{ route('avisos.index') }}" class="btn btn-secondary">← Voltar para lista</a>

@endsection
