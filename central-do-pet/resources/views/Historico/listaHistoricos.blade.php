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

  <h1>Lista de históricos médicos <img src="https://img.icons8.com/android/24/000000/survival-bag.png"/></h1>
  <p class="lead">Lista de todos os históricos cadastrados no sistema</p>

  </div>
<div class='container'>
      <table  class="table table-sm">
          <tr>
            <td class="bg-danger text-white">ID do Histórico</td>
            <td class="bg-danger text-white">ID do PET</td>
            <td class="bg-danger text-white">Alergias</td>
            <td class="bg-danger text-white">Ações</td>
          </tr>

      @foreach ($historicos as $historico)

        <tr>
            <td><a href='/view/historico/{{ $historico->id }}'>{{$historico->id}}</a></td>
            <td>{{ $historico->pet_id }}</td>
            <td>{{ $historico->alergias}}</td>
            <td><a type="button" class="btn btn-primary" href='/editar/historico/{{ $historico->id }}'>Editar</a>
                <a type="button" class="btn btn-primary" href='/remover/historico/{{ $historico->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a type="button" class="btn btn-primary" href="/adicionar/historico">Adicionar histórico</a>
  </body>
</html>
