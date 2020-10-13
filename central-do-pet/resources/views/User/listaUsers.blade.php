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

  <h1>Lista de usuários <img src="https://img.icons8.com/metro/26/000000/change-user-male.png"/></h1>
  <p class="lead">Lista de todos os tipos de usuários cadastrados no sistema</p>

  </div>
<div class='container'>
    @if(trim(Auth::user()->funcao) != trim("Administrador"))
        <script type="text/javascript">
            window.location = "/paineladm";
        </script>
    @endif
  <table  class="table table-sm">
      <tr>
        <td class="bg-danger text-white">ID</td>
        <td class="bg-danger text-white">Nome</td>
        <td class="bg-danger text-white">Função</td>
        @if(trim(\Illuminate\Support\Facades\Auth::user()->funcao) == trim("Administrador"))
        <td class="bg-danger text-white">Ações</td>
        @endif
      </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->funcao}}</td>
            @if(trim(\Illuminate\Support\Facades\Auth::user()->funcao) == trim("Administrador"))
            <td><a type="button" class="btn btn-primary" href='/editar/user/{{ $user->id }}'>Editar</a>
                <a type="button" class="btn btn-primary" href='/remover/user/{{ $user->id }}'>Remover</a></td>
            @endif
        </tr>
    @endforeach
</table>
<a type="button" class="btn btn-primary" href="/adicionar/user">Inserir novo usuário</a>
</div>
</body>
</html>
