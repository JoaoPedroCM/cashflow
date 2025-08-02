<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'CashFlow')</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
        table td, table th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="painel">CashFlow</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Menu à esquerda -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="clientes">Clientes</a>
                        </li>
                        <!-- Links específicos para usuário do tipo Master -->
                        @if(Auth::user()->tipo_usuario === 'master')
                            <li class="nav-item">
                                <a href="" class="nav-link">Clientes Inativos</a>
                            </li>
                            <li class="nav-item">
                                <a href="usuarios" class="nav-link">Usuários</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Alterações</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Configurações</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="transacoes">Transações</a>
                        </li>
                    </ul>

                    <!-- Dropdown usuário à direita -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                {{ Auth::user()->nome }} ({{Auth::user()->tipo_usuario}})
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        Sair
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Formulário de logout invisível -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </header>

    <main class="container-fluid mt-4">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-muted py-3 border-top mt-auto">
        <small>&copy; {{ date('Y') }} CashFlow. Todos os direitos reservados.</small>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
