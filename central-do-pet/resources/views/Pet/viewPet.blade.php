@php
session_start();
$_SESSION['id_pet'] = $pet->id;
@endphp

<!doctype html>
<html lang="{{ app()->getLocale() }}">
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

  <h1>Informações do pet <img src="https://img.icons8.com/ios-glyphs/30/000000/pet-commands-stay.png"/></h1>
  <p class="lead">Confira as informações do pet e como entrar em contato para adoção!</p>

  </div>
<div class='container'>
    <center>
        <img class="rounded-circle" src="{{\Illuminate\Support\Facades\URL::to('fotos/pets/' . $pet->image )}}" alt="Generic placeholder image" width="250" height="250" >
    </center>

<table class="table table-sm">

        <tr>
          <td class="bg-danger text-white">ID</td>
          <td class="bg-danger text-white">RG</td>
          <td class="bg-danger text-white">Nome</td>
          <td class="bg-danger text-white">Sexo</td>
          <td class="bg-danger text-white">Cadastrado</td>
          <td class="bg-danger text-white">Data de nascimento</td>
          <td class="bg-danger text-white">ID do Dono</td>
          <td class="bg-danger text-white">Contato para adoção</td>
        </tr>
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->rga }}</td>
            <td>{{ $pet->nome }}</td>
            <td>{{ $pet->sexo }}</td>
            <td>{{ $pet->castrado }}</td>
            <td>{{ $pet->data_de_nascimento }}</td>
            @if($pet->dono_id == null)
                <td> {{ 'Sem dono' }} </td>

            @endif
            @if($pet->dono_id != null)
                <td> {{ $pet->dono_id  }} </td>
            @endif

            @foreach($users as $user)
                @if($user->id == $pet->registro)
                    <td><img src="https://img.icons8.com/fluent-systems-regular/24/000000/call-female.png"/>{{$user->contato}}</td>
                @endif
            @endforeach

        </tr>
</table>


@if($historico != null)
    <a type="button" class="btn btn-primary" href="/view/historico/{{$historico->id}}">Histórico</a>
@endif
@auth
@if($historico == null)
    <a type="button" class="btn btn-primary" href="/adicionar/historico/">Adicionar histórico</a>
@endauth
@endif

</div>
</body>
</html>
