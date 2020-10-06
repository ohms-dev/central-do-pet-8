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

  <h1>Atualizar pet <img src="https://img.icons8.com/ios-glyphs/30/000000/hachiko.png"/></h1>
  <p class="lead">Atualize as informações do pet selecionado</p>
  </div>

<div class='container'>
    <form action="/atualizar/pet" method="post">
      {{csrf_field()}}
      <div class="form-group">
      <label for"contato">Nome:</label>
      <input type="text" class="form-control" id="nome" />
      </div>

      <div class="form-group">
      <label for"sexo">Sexo:</label>
      <select class="form-control" id="sexo">
                <option value="Macho">Macho</option>
                <option value="Femea">Femea</option>
            </select>
      </div>

      <div class="form-group">
      <label for"sexo">Castrado:</label>
      <select class="form-control" id="sexo">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
      </div>

      <div class="form-group">
      <label for"contato">Necessidades Especiais:</label>
      <input type="text" class="form-control" id="necessidades_especiais" />
      </div>

      <div class="form-group">
      <label for="data_de_nascimento">Data de nascimento:</label>
      <input type="date" class="form-control" id="data_de_nascimento" />
      </div>

      <div class="form-group">
      <label for"contato">ID do Dono:</label>
      <input type="text" class="form-control" id="dono_id" />
      </div>

      <input type="submit" class="btn btn-primary" value="Atualizar" />
    </form>
  </div>
  </body>
</html>
