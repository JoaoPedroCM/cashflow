@extends('site/layout')

@section('title', 'Painel')

@section('content')
    <h1 class="display-6">Bem-vindo ao Painel CashFlow!</h1>
    

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th class="text-success">Cliente</th>
                <th class="text-success">Data</th>
                <th class="text-success">Moeda</th>
                <th class="text-success">Valor</th>
                <th class="text-success">Valor Convertido</th>
                <th class="text-success">Descrição</th>
                <th class="text-success">Forma de Pagamento</th>
                <th class="text-success">Satus</th>
                <th colspan="2" class="text-success">Opções</th>
            </tr>
        </thead>
        
        @foreach ($vendas as $venda)
            <tr>
                <td>{{ $venda->cliente->nome ?? 'Cliente não encontrado' }}</td>
                <td>{{$venda->data_formatada}}</td>
                <td>{{$venda->moeda}}</td>
                <td>{{$venda->valor}}</td>
                <td>{{ $venda->valor_convertido ?? $venda->valor }}</td>
                <td>{{$venda->descricao}}</td>
                <td>{{$venda->forma_pgto}}</td>
                <td>{{$venda->status}}</td>
                <td><a href="" title="Editar venda"><i class="bi bi-pencil-square text-primary"></i></a></td>
                <td><a href="" title="Excluir venda"><i class="bi bi-trash3-fill text-danger"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
