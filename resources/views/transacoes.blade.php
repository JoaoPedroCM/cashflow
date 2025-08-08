@extends('site/layout')

@section('title', 'Transações')

@section('content')
    <h1 class="display-6">Transações
        <a href="nova_transacao" class="btn btn-success">
            Nova Transação<i class="bi bi-plus"></i>
        </a>
    </h1>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-primary">Cliente</th>
                <th class="text-primary">Data</th>
                <th class="text-primary">Moeda</th>
                <th class="text-primary">Valor</th>
                <th class="text-primary">Valor Convertido</th>
                <th class="text-primary">Descrição</th>
                <th class="text-primary">Forma de Pagamento</th>
                <th class="text-primary">Satus</th>
                <th class="text-primary">Dar baixa</th>
            </tr>
        </thead>
        
        @foreach ($vendas as $venda)
            <tr>
                <td>{{$venda->cliente->nome ?? 'Cliente não encontrado'}}</td>
                <td>{{$venda->data_formatada}}</td>
                <td>{{$venda->moeda}}</td>
                <td>{{$venda->valor}}</td>
                <td>{{$venda->valor_convertido ?? $venda->valor}}</td>
                <td>{{$venda->descricao}}</td>
                <td>{{$venda->forma_pgto}}</td>
                <td>{{$venda->status}}</td>
                <td>
                    @if ($venda->status === 'pendente')
                        <a href="{{ route('transacao.edit', $venda->id) }}" title="Dar baixa" onclick="return confirm('Dar baixa?')">
                            <i class="bi bi-credit-card text-warning"></i>
                        </a>
                    @else
                        <i class="bi bi-check-lg text-success" title="Pago"></i>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center">
        {{ $vendas->links('pagination::bootstrap-4') }}
    </div>
@endsection
