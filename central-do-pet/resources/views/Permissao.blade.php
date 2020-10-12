<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #E14B56;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listar/pets">Adotar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/consultar">Consultar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar/funcionarios">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>
<div class='jumbotron'>

    <h1>Lista de usuários <img src="https://img.icons8.com/metro/26/000000/change-user-male.png"/></h1>
    <p class="lead">Você não possui permissão para acessar a página dentro de 30s iremos redirecionar-lo</p>

</div>
    sleep(30);
    return redirect('/home');
</body>
</html>
