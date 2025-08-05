@extends('site/layout')

@section('title', 'Novo Usuário')

@section('content')
    <h1 class="display-6">Novo Usuário</h1>
    
    <main class="d-flex justify-content-center align-items-center flex-grow-1">
        <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
            <h3 class="text-center mb-4">Formulário de Cadastro</h3>
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="col-md-6">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <div class="col-md-6">
                        <label for="tipo_usuario" class="form-label">Tipo de Usuário</label>
                        <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                            <option value="master">Master</option>
                            <option value="comum" selected>Comum</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
    </main>

    <!-- Scripts para Inputmask -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script>
        $('#numero').inputmask('(99) 99999-9999', {
            placeholder: '',
            showMaskOnHover: false,
            showMaskOnFocus: false,
            clearMaskOnLostFocus: true
        });
    </script>
@endsection
