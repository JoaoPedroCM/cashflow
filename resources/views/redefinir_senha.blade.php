<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Recuperar Senha - CashFlow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column justify-content-between min-vh-100 bg-light">

  <header class="text-center mt-4">
    <h1 class="display-6">CashFlow</h1>
  </header>

  <main class="d-flex justify-content-center align-items-center flex-grow-1">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
      <h3 class="text-center mb-4">Recuperar Senha</h3>

      @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            required
            autofocus
            value="{{ old('email') }}"
          />
        </div>
        <button type="submit" class="btn btn-primary w-100">Enviar link de recuperação</button>

        <div class="text-center mt-3">
          <a href="{{ route('login') }}">Fazer Login</a>
        </div>

      </form>
    </div>
  </main>

  <footer class="bg-white text-center text-muted py-3 border-top">
    <small>&copy; {{ date('Y') }} CashFlow. Todos os direitos reservados.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
