<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Adapte conforme sua estrutura de CSS -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Gerenciador de Livros</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('livros.index') }}">Listar Livros</a></li>
                    <li><a href="{{ route('livros.create') }}">Adicionar Livro</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Gerenciador de Livros</p>
        </footer>
    </div>
</body>
</html>
