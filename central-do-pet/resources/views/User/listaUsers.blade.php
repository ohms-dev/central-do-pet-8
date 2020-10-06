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
          <a class="nav-link" href="#">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Equipe</a>
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
  <p class="lead">Lista de todos os tipos de usuários cadastrados no sistema</p>

  </div>
<div class='container'>

  <table  class="table table-sm">
      <tr>
        <td class="bg-danger text-white">ID</td>
        <td class="bg-danger text-white">Nome</td>
        <td class="bg-danger text-white">Função</td>
        @if(trim(Auth::user()->funcao) == trim("Administrador"))
        <td class="bg-danger text-white">Ações</td>
        @endif
      </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->funcao}}</td>
            @if(trim(Auth::user()->funcao) == trim("Administrador"))
            <td><a type="button" class="btn btn-primary" href='/editar/user/{{ $user->id }}'>Editar</a>
                <a type="button" class="btn btn-primary" href='/remover/user/{{ $user->id }}'>Remover</a></td>
            @endif
        </tr>
    @endforeach
</table>
<a type="button" class="btn btn-primary" href="/adicionar/user">Inserir novo usuário</a>
</body>
</html>
