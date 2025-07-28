<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - CashFlow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

@if (session('erro'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('erro') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif

<body class="d-flex flex-column justify-content-between min-vh-100 bg-light">

  <!-- Título no topo -->
  <header class="text-center mt-4">
    <h1 class="display-6">CashFlow</h1>
  </header>

  <!-- Formulário centralizado -->
  <main class="d-flex justify-content-center align-items-center flex-grow-1">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
      <h3 class="text-center mb-4">Login</h3>
      <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </main>

  <!-- Rodapé fixo no fim -->
  <footer class="bg-white text-center text-muted py-3 border-top">
    <small>&copy; {{ date('Y') }} CashFlow. Todos os direitos reservados.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
