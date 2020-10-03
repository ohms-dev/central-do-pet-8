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
<!-- Slider -->
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/facebook-new.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/material-rounded/24/000000/instagram-new.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/twitter.png"/></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/ohms-dev/central-do-pet-8"><img src="https://img.icons8.com/metro/26/000000/github.png"/></a>
          </li>
        </ul>
    </div>


</head>

<body>
      <!-- Slide inicial -->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://eb2empreendimentos.com.br/wp-content/uploads/2019/07/Blog_024_robert-larsson-unsplash_3-800x400.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>BEM VINDO AO SITE</h2>
          <h1><b>CENTRAL DO PET</b></h1>
          <p>Muitos pets já foram adotados e esperamos que isso continue crescendo!</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://caocidadao.com.br/wp-content/uploads/2016/11/dicas_interna-interpretar-sinais-do-pet.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>FIQUE LIGADO NOS</h2>
          <h1><b>EVENTOS DE ADOÇÃO E VACINAÇÃO</b></h1>
          <p>Temos um sistema eficiente que mostra eventos por toda a cidade!</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://amepet.com.br/wp-content/uploads/2016/08/veterinary-technicia-800x400.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h2>CONTAMOS COM OS</h2>
          <h1><b>MELHORES PROFISSIONAIS VETERINÁRIOS</b></h1>
          <p>Somos parceiros dos profissionais mais qualificados para lidar com os problemas do seu pet!</p>
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Serviços de qualidade <img src="https://img.icons8.com/dotty/80/000000/service.png"/></h1>
    <p class="lead">Nós oferecemos uma forma simples e rápida para que você possa adotar o seu pet.</p>
  </div>
</div>

<div class="container marketing">

  <!-- Três colunas de texto, abaixo do carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3t364gyII6xeoK-TT9TZAAcurAWUJy4SeEg&usqp=CAU" alt="Generic placeholder image" width="140" height="140">
      <h2>Adoção</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="https://portaldoscaesegatos.com.br/wp-content/uploads/2017/08/vacina-200x200.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Eventos</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="https://www.friendshiphospital.com/wp-content/uploads/2017/03/elyshiahankin-200x200.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Profissionais</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">O que você sabe sobre adoção? <span class="text-muted">Adoção é um ator de amor <img src="https://img.icons8.com/officexs/30/000000/filled-like.png"/></span></h2>
    <p class="lead">Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!

.</p>
  </div>
  <div class="col-md-5">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Precisa falar com a gente? <span class="text-muted">Entre em contato!</span></h2>
    <p class="lead"><img src="https://img.icons8.com/windows/32/000000/email-open.png"/> centraldopet@yahoo.com.br</p>
    <p class="lead"><img src="https://img.icons8.com/android/24/000000/phone.png"/> (87) 9 9952-8122</p>
  </div>
  <div class="col-md-5 order-md-1">
  </div>
</div>


<hr class="featurette-divider">

<!-- /FIM DAS FEATUREZINHAS *-* -->

</div><!-- /.container -->

<!-- FOOTER -->
<footer class="container">
  <p class="float-right"><a href="#">Voltar ao topo</a></p>
  <p>&copy; ohms-dev., 2020-2020 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
</footer>
</main>

<!-- Principal JavaScript do Bootstrap
================================================== -->
<!-- Foi colocado no final para a página carregar mais rápido -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
<script src="../../assets/js/vendor/holder.min.js"></script

</body>
</html>
