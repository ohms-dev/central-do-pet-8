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
          <a class="nav-link" href="#">Ajuda</a>
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

  <h1>Atualizar usuário <img src="https://img.icons8.com/metro/26/000000/change-user-male.png"/></h1>
  <p class="lead">Atualize as informações do usuário selecionado</p>

  </div>
<div class='container'>
    @if(trim(Auth::user()->funcao) != trim("Administrador"))
        <script type="text/javascript">
            window.location = "/paineladm";
        </script>
    @endif
<form action="/atualizar/user" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$user->id}}">


        {{ csrf_field() }}
        <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name"/  value="{{$user->name}}">
        </div>

        <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-control" name="sexo">
            @if(strtolower(trim($user->sexo))==trim("masculino"))
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Não binário">Não binário</option>
            <option value="Outro">Outro</option>
            <option value="Não informar">Não informar</option>
            @elseif(strtolower(trim($user->sexo))==trim("feminino"))
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Não binário">Não binário</option>
            <option value="Outro">Outro</option>
            <option value="Não informar">Não informar</option>
            @elseif(strtolower(trim($user->sexo))==trim("não binário"))
            <option value="Não binário">Não binário</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Outro">Outro</option>
            <option value="Não informar">Não informar</option>
            @elseif(strtolower(trim($user->sexo))==trim("outro"))
            <option value="Outro">Outro</option>
            <option value="Não binário">Não binário</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            <option value="Não informar">Não informar</option>
            @elseif(strtolower(trim($user->sexo))==trim("não informar"))
            <option value="Não informar">Não informar</option>
            <option value="Outro">Outro</option>
            <option value="Não binário">Não binário</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
            @endif


        </select>
        </div>

        <div class="form-group">
        <label for="contato">Contato:</label>
        <input type="text" class="form-control" name="contato" value="{{$user->contato}}" />
        </div>

        <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" name="email"  value="{{$user->email}}"/>
        </div>

        <div class="form-group">
        <label for="funcao">Função:</label>
        <select class="form-control" name="funcao">
            @if(strtolower(trim($user->funcao))==trim("médico veterinário"))
            <option value="Médico Veterinário">Médico Veterinário</option>
            <option value="Funcionário">Funcionário</option>
            <option value="ONG">ONG</option>
            <option value="Tutor">Tutor</option>
            @elseif(strtolower(trim($user->funcao))==trim("funcionário"))
            <option value="Funcionário">Funcionário</option>
            <option value="Médico Veterinário">Médico Veterinário</option>
            <option value="ONG">ONG</option>
            <option value="Tutor">Tutor</option>
            @elseif(strtolower(trim($user->funcao))==trim("ong"))
            <option value="ONG">ONG</option>
            <option value="Funcionário">Funcionário</option>
            <option value="Médico Veterinário">Médico Veterinário</option>
            <option value="Tutor">Tutor</option>
            @elseif(strtolower(trim($user->funcao))==trim("tutor"))
            <option value="Tutor">Tutor</option>
            <option value="ONG">ONG</option>
            <option value="Funcionário">Funcionário</option>
            <option value="Médico Veterinário">Médico Veterinário</option>
            @endif

        </select>
        </div>

        <div class="form-group">
        <label for="endereco">Endereco:</label>
        <input type="text" class="form-control" name="endereco"  value="{{$user->endereco}}"/>
        </div>

        <div class="form-group">
        <label for="data_de_nascimento">Data de nascimento:</label>
        <input type="date" class="form-control" name="data_de_nascimento"  value="{{$user->data_de_nascimento}}"/>
        </div>

        <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" name="password" />
        </div>

        <input type="submit" class="btn btn-primary" value="Atualizar" />
</form>
</div>
</body>
</html>
