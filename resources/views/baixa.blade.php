@extends('site/layout')

@section('title', 'Dar Baixa')

@section('content')
    <h1 class="display-6">Dar baixa na transação</h1>

    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Cliente:</strong> {{ $venda->cliente->nome ?? 'Cliente não encontrado' }}</p>
            <p><strong>Data:</strong> {{ $venda->data_formatada }}</p>
            <p><strong>Moeda:</strong> {{ $venda->moeda }}</p>
            <p><strong>Valor:</strong> {{ $venda->valor }}</p>
            <p><strong>Valor Convertido:</strong> {{ $venda->valor_convertido ?? $venda->valor }}</p>
            <p><strong>Descrição:</strong> {{ $venda->descricao }}</p>
            <p><strong>Status atual:</strong> {{ $venda->status }}</p>
        </div>
    </div>

    <form method="POST" action="{{ route('transacoes.update', $venda->id) }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="status" value="pago">

        <div class="mb-3">
            <label for="forma_pgto" class="form-label">Forma de Pagamento</label>
            <select name="forma_pgto" id="forma_pgto" class="form-select" required>
                <option value="">Selecione</option>
                <option value="pix">Pix</option>
                <option value="paypal">PayPal</option>
                <option value="debito">Débito</option>
                <option value="credito">Crédito</option>
                <option value="dinheiro">Dinheiro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Confirmar Baixa</button>
    </form>
@endsection
