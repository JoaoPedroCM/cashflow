@extends('site/layout')

@section('title', 'Transações')

@section('content')
    <h1 class="display-6">Nova Transação</h1>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <main class="d-flex justify-content-center align-items-center flex-grow-1">
        <div class="card shadow p-4" style="width: 100%; max-width: 800px;"> {{-- aumentei o max-width para comportar 3 colunas --}}
            <h3 class="text-center mb-4">Dados da Transação</h3>
            <form method="POST" action="{{ route('transacoes.store') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="usuario" class="form-label">Usuário</label>
                        <select class="form-control" id="usuario" name="usuario">
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>

                    <div class="col-md-4">
                        <label for="forma_pgto" class="form-label">Forma de Pagamento</label>
                        <select class="form-control" id="forma_pgto" name="forma_pgto">
                            <option value="em aberto">em aberto</option>
                            <option value="dinheiro">dinheiro</option>
                            <option value="debito">debito</option>
                            <option value="credito">credito</option>
                            <option value="paypal">paypal</option>
                            <option value="pix">pix</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="moeda" class="form-label">Moeda</label>
                        <select class="form-control" id="moeda" name="moeda">
                            <option value="BRL" selected>BRL - Real Brasileiro</option>
                            <option value="USD">USD - Dólar Americano</option>
                            <option value="EUR">EUR - Euro</option>
                            <option value="JPY">JPY - Iene Japonês</option>
                            <option value="GBP">GBP - Libra Esterlina</option>
                            <option value="AUD">AUD - Dólar Australiano</option>
                            <option value="CAD">CAD - Dólar Canadense</option>
                            <option value="CHF">CHF - Franco Suíço</option>
                            <option value="CNY">CNY - Yuan Chinês</option>
                            <option value="INR">INR - Rúpia Indiana</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="number" step="0.01" class="form-control" id="valor" name="valor" placeholder="Ex: 89,90" required>
                    </div>

                    <div class="col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="pendente">pendente</option>
                            <option value="pago">pago</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Salvar</button>
            </form>
        </div>
    </main>
@endsection
