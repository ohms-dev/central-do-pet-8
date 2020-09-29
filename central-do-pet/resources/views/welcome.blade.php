<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #E14B56;">
      <a class="navbar-brand" href="#"><img src="https://img.icons8.com/fluent/48/000000/pug.png"/></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adotar</a>
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
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>

      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/ohms-dev/central-do-pet-8"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/facebook-new.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/ohms-dev/central-do-pet-8"><img src="https://img.icons8.com/material-rounded/24/000000/instagram-new.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/ohms-dev/central-do-pet-8"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/twitter.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/ohms-dev/central-do-pet-8"><img src="https://img.icons8.com/metro/26/000000/github.png"/></a>
          </li>
        </ul>
    </div>
</nav>

</head>

<body>

</body>
</html>
