<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CashFlow')</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white p-3 mb-4">
        <div class="container">
            <h1>Painel</h1> 
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Sair</button>
        </form>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3 mt-4">
        <div class="container">
            &copy; {{ date('Y') }} Meu Sistema - Todos os direitos reservados.
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
