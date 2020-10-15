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

  <h1>Histórico médico <img src="https://img.icons8.com/android/24/000000/stethoscope.png"/></h1>
  <p class="lead">Informações gerais a respeito da saúde do pet!</p>

  </div>
<div class='container'>
    <tr>
        <center>
            <img class="rounded-circle" src="{{\Illuminate\Support\Facades\URL::to('fotos/pets/' . $pet->image )}}" alt="Generic placeholder image" width="250" height="250" >
        </center>
        <center>
            <td class="bg-danger text-white">{{$pet->nome}}</td>
            <td class="bg-danger text-white">{{$pet->rga}}</td>
        </center>
    </tr>
<table  class="table table-sm">
    <tr>
      <td class="bg-danger text-white">ID do histórico</td>
      <td class="bg-danger text-white">ID do Pet</td>
      <td class="bg-danger text-white">Alergias</td>
    </tr>
    <tr>
        <td>{{ $historico->id }}</td>
        <td>{{ $historico->pet_id }}</td>
        <td>{{ $historico->alergias }}</td>
    </tr>
    <tr>
        <td class="bg-danger text-white">Id da vacina</td>
        <td class="bg-danger text-white">Nome da vacina</td>
        <td class="bg-danger text-white">Data da vacina</td>
    </tr>
    <tr>
        @foreach($vacinas as $vacina)
            @if($vacina->historico_id == $historico->id)
                <tr>
                    <td>{{$vacina->id}}</td>
                    <td>{{$vacina->vacina}}</td>
                    <td>{{$vacina->data}}</td>
                </tr>
            @endif
        @endforeach
    </tr>
    <tr>
        <td class="bg-danger text-white">Id da doença</td>
        <td class="bg-danger text-white">Nome da doença</td>
        <td class="bg-danger text-white">Data da doença</td>
    </tr>
    <tr>
        @foreach($doencas as $doenca)
            @if($doenca->historico_id == $historico->id)
                <tr>
                    <td>{{$doenca->id}}</td>
                    <td>{{$doenca->doenca}}</td>
                    <td>{{$doenca->data}}</td>
                </tr>
            @endif
        @endforeach
    </tr>
    <tr>
        <td class="bg-danger text-white">Id da transfusão</td>
        <td class="bg-danger text-white">Data da transfusão</td>
    </tr>
    <tr>
        @foreach($transfusaos as $transfusao)
            @if($transfusao->historico_id == $historico->id)
                <tr>
                    <td>{{$transfusao->id}}</td>
                    <td>{{$transfusao->data}}</td>
                </tr>
            @endif
        @endforeach
    </tr>
</table>
@auth
<a type="button" class="btn btn-primary" href='/adicionar/vacina'>Adicionar vacina</a>
<a type="button" class="btn btn-primary" href='/adicionar/doencas'>Adicionar doença</a>
<a type="button" class="btn btn-primary" href='/adicionar/transfusao'>Adicionar transfusão</a>
@endauth
</div>
</body>
</html>
