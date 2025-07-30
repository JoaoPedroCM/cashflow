@extends('site/layout')

@section('title', 'Painel')

@section('content')
    <h2>Bem-vindo ao CashFlow!</h2>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Moeda</th>
                <th>Valor</th>
                <th>Valor Convertido</th>
                <th>Descrição</th>
                <th>Forma de Pagamento</th>
                <th>Satus</th>
            </tr>
        </thead>
        
        @foreach ($vendas as $venda)
            <tr>
                <td>{{ $venda->cliente->nome ?? 'Cliente não encontrado' }}</td>
                <td>{{$venda->data}}</td>
                <td>{{$venda->moeda}}</td>
                <td>{{$venda->valor}}</td>
                <td>{{ $venda->valor_convertido ?? $venda->valor }}</td>
                <td>{{$venda->descricao}}</td>
                <td>{{$venda->forma_pgto}}</td>
                <td>{{$venda->status}}</td>
            </tr>
        @endforeach
    </table>
@endsection
