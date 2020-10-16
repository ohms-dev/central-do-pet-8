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
          <a class="nav-link" href="/listar/funcionarios">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/paineladm">Painel de usuário</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="/listar/Meuspets">Meus Pets</a>
          </li>

      </ul>

      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
</nav>
</head>

<body>
  <div class='jumbotron'>

  <h1>Cadastrar usuário <img src="https://img.icons8.com/metro/26/000000/change-user-male.png"/></h1>
  <p class="lead">Cadastro geral dos usuários do sistema</p>

  </div>
<div class='container'>
    @if(trim(Auth::user()->funcao) != trim("Administrador")  and trim(Auth::user()->funcao) != trim("Funcionário"))
        <script type="text/javascript">
            window.location = "/paineladm";
        </script>
    @endif
<form action="/adicionar/user" method="post">

    {{ csrf_field() }}
    <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control" name="name"/>
    </div>

    <div class="form-group">
    <label for="sexo">Sexo:</label>
    <select class="form-control" name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Não binário">Não binário</option>
        <option value="Outro">Outro</option>
        <option value="Não informar">Não informar</option>
    </select>
    </div>

    <div class="form-group">
    <label for="contato">Contato:</label>
    <input type="text" class="form-control" name="contato" />
    </div>

    <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="text" class="form-control" name="email" />
    </div>

    <div class="form-group">
    <label for="funcao">Função:</label>
    <select class="form-control" name="funcao">
        <option value="Médico Veterinário">Médico Veterinário</option>
        <option value="Funcionário">Funcionário</option>
        <option value="ONG">ONG</option>
        <option value="Tutor">Tutor</option>
    </select>
    </div>

    <div class="form-group">
    <label for="endereco">Endereco:</label>
    <input type="text" class="form-control" name="endereco" />
    </div>

    <div class="form-group">
    <label for="data_de_nascimento">Data de nascimento:</label>
    <input type="date" class="form-control" name="data_de_nascimento" />
    </div>

    <div class="form-group">
    <label for="password">Senha:</label>
    <input type="password" class="form-control" name="password" />
    </div>

    <div class="form-group">
    <label for="password_confirmation">Confirme a senha:</label>
    <input type="password" class="form-control" name="password_confirmation" />
    </div>

    <input type="submit" class="btn btn-primary" value="Cadastrar" />
    @error('name')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('sexo')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('contato')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('data_de_nascimento')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('funcao')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('endereco')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('email')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('password')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror

</form>
</div>
</body>
</html>
