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

    <h1>Lista de vacinas <img src="https://img.icons8.com/ios-glyphs/30/000000/virus.png"/></h1>
    <p class="lead">Lista de todos as vacinas cadastradas no sistema</p>

</div>
<div class='container'>
    @if(trim(Auth::user()->funcao) != trim("Administrador") and trim(Auth::user()->funcao) != trim("Médico Veterinário"))
        <script type="text/javascript">
            window.location = "/paineladm";
        </script>
    @endif
    <table  class="table table-sm">
        <tr>
            <td class="bg-danger text-white">ID</td>
            <td class="bg-danger text-white">Nome</td>
            <td class="bg-danger text-white">Data</td>
            <td class="bg-danger text-white">Ações</td>
        </tr>
        @foreach ($vacinas as $vacina)
            <tr>
                <td>{{ $vacina->id }}</td>
                <td>{{ $vacina->vacina }}</td>
                <td>{{ $vacina->data }}</td>
                <td><a type="button" class="btn btn-primary" href='/editar/vacina/{{ $vacina->id }}'>Editar</a>
                    <a type="button" class="btn btn-primary" href='/remover/vacina/{{ $vacina->id }}'>Remover</a></td>
            </tr>
        @endforeach
    </table>
    <a type="button" class="btn btn-primary" href="/adicionar/vacinas">Inserir vacina</a>
</div>
</body>
</html>
