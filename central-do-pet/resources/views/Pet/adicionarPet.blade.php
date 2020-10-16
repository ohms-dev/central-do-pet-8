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

  <h1>Cadastrar pet <img src="https://img.icons8.com/ios-glyphs/30/000000/hachiko.png"/></h1>
  <p class="lead">Cadastro geral dos pets do sistema</p>

  </div>
<div class='container'>

    <form action="/adicionar/pet" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" />
      </div>

      <div class="form-group">
        <label for="especie">Espécie:</label>
        <select class="form-control" name="especie">
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
            <option value="coelho">Coelho</option>
            <option value="tartaruga">Tartaruga</option>
            <option value="passaro">Pássaro</option>
            <option value="outro">Outro</option>
        </select>
      </div>

      <div class="form-group">
      <label for="sexo">Sexo:</label>
      <select class="form-control" name="sexo">
                <option value="Macho">Macho</option>
                <option value="Femea">Femea</option>
      </select>
      </div>

      <div class="form-group">
      <label for="castrado">Castrado:</label>
      <select class="form-control" name="castrado">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
      </select>
      </div>

      <div class="form-group">
      <label for="necessidades_especiais">Necessidades Especiais:</label>
      <input type="text" class="form-control" name="necessidades_especiais" />
      </div>

      <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco" />
      </div>

      <div class="form-group">
      <label for="data_de_nascimento">Data de nascimento:</label>
      <input type="date" class="form-control" name="data_de_nascimento" />
      </div>

      <div class="form-group">
        <label for="dono_id">ID do Dono:</label>
        @if(trim(Auth::user()->funcao) == trim("Tutor") or trim(Auth::user()->funcao) == trim("Médico Veterinário"))
            <select class="form-control" name="dono_id">
                <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->id}}</option>
            </select>
        @endif
        @if(trim(Auth::user()->funcao) != trim("Tutor") and trim(Auth::user()->funcao) != trim("Médico Veterinário")  and trim(Auth::user()->funcao) != trim("Funcionário"))
              <input type="text" class="form-control" name="dono_id" />
        @endif
      </div>

<div class="form-group">
<label for="registro">Registro:</label>
  <select class="form-control" name="registro">
      <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->id}}</option>
  </select>
</div>

<div class="input-group">
<div class="custom-file">
   <input type="file" name="foto" class="custom-file-input">
   <label class="custom-file-label">Escolha uma foto</label>
</div>
</div>

<br>

<input type="submit" class="btn btn-primary" value="Cadastrar" />

@error('nome')
<span class="invalid-feedback" role="alert">
  <script type='text/javascript'>alert('{{ $message }}');</script>
</span>
@enderror
@error('sexo')
<span class="invalid-feedback" role="alert">
  <script type='text/javascript'>alert('{{ $message }}');</script>
</span>
@enderror
@error('castrado')
<span class="invalid-feedback" role="alert">
  <script type='text/javascript'>alert('{{ $message }}');</script>
</span>
@enderror
@error('data_de_nascimento')
<span class="invalid-feedback" role="alert">
  <script type='text/javascript'>alert('{{ $message }}');</script>
</span>
@enderror
        @error('endereco')
        <span class="invalid-feedback" role="alert">
  <script type='text/javascript'>alert('{{ $message }}');</script>
</span>
        @enderror
<br>
</form>
</div>
</body>
</html>
