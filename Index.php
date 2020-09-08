
<?php
require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE HTML>

<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Associação Nova Conquista - Juína - MT</title>
  <link rel="icon" href="img/logo.jpeg">

  <!-- link para o arquivo css-->
  <link rel="stylesheet" href="estilo.css">

  <!-- links para as bibliotecas Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
  <!-- Barra de navegação -->
  </header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparencia" style="background-color: #F0FFFF">
      <div class="container">
        <!-- Botão de colapso -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" name="button" data-target="#escondemenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo -->
        <div class="">
          <a href="#" class="navbar-brand"><span id="img-barra" class="">Nova Conquista</span></a>
        </div>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="escondemenu">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="Index.php" class="nav-link">Página inicial<span class="sr-only">(visivel)</span> </a>
            </li>
            <li class="nav-item">
              <a href="quemsomos.php" class="nav-link">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a href="Inscreva-se.php" class="nav-link">Inscrever-se</a>
            </li>
            <li class="nav-item">
              <a href="faleConosco.php" class="nav-link">Fale conosco</a>
            </li>
            <li class="nav-item">
              <a href="Entrar.php" class="nav-link">Entrar</a>
            </li>
          </ul>
        </div>
      </div> <!-- fim do container da barra de navegação -->
    </nav>
  </header><!-- fim da configuração da barra de navegação -->

  <br>

  <!-- Corpo do site -->

  <div class="container-md">
    <!-- Carrossel -->
    <div class="carousel slide" data-ride="carousel" id="indicador-carrossel">
      <ol class="carousel-indicators">
        <li data-target="#indicador-carrossel" data-slide-to="0" class="active"></li>
        <li data-target="#indicador-carrossel" data-slide-to="1"></li>
        <li data-target="#indicador-carrossel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/propaganda_2.jpg" alt="" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <!--<h5 class="texto-carrossel">Assosciação Nova Conquista</h5>
            <p>Faça uma visita as instalações no bairro Módulo 4</p>-->
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/PNRS_5.jpg" alt="" class="d-block w-100">
          <!--div class="carousel-caption d-none d-md-block">
            <h5>PNRS e você</h5>
            <p>Como a Política Nacional de Resíduos Sólidos afeta nossa vida diária</p>
          </div-->
        </div>
        <div class="carousel-item">
          <img src="img/reciclagem_1.jpg" alt="" class="d-block w-100"><br>
          <div class="carousel-caption d-none d-md-block">
            <h5>Coleta de recicláveis</h5>
            <p>Confira os dias em que nosso caminhão de coleta passa em seu bairro</p>
          </div>
        </div>
      </div>
      <a href="#indicador-carrossel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">anterior</span>
      </a>
      <a href="#indicador-carrossel" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">próximo</span>
      </a>
    </div>
  </div>
  <!-- textos -->
  <section id="artigos-home">
    <div class="container">
      <div class="row artigo-main">
        <div class="col-md-8">
          <h2>Serviço de reciclagem, qual sua importancia?</h2>
          <img src="img/PNRS_3.jpg" style="float:left; padding-right: 15px; padding-bottom: 1px;" alt="">
          <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada euismod libero eget vulputate. Nunc massa nisl, suscipit et posuere eget, elementum sed lorem. Nullam tincidunt facilisis venenatis. Ut nisi tortor, luctus pretium efficitur molestie, pellentesque quis quam. Sed lobortis justo eget egestas dapibus. Quisque pellentesque egestas mi vel iaculis. Phasellus placerat enim at sem tristique facilisis.

          Etiam velit nunc, pretium vel pulvinar vel, lacinia eget sapien. Donec risus sapien, porta at mollis ac, pretium eu elit. Pellentesque euismod nibh ac diam consectetur, id interdum nibh pulvinar. Maecenas sit amet dapibus nulla. Etiam vehicula sem vitae urna ornare eleifend. Cras posuere feugiat lectus sit amet volutpat. Phasellus at fringilla lacus, ac sodales metus. Mauris in lorem ligula. Vivamus ornare ex a mollis pellentesque. Quisque finibus molestie libero, at cursus erat tristique a.

          Maecenas neque arcu, gravida nec pellentesque eget, pharetra sed ex. Fusce nec enim ac diam fringilla tristique nec vel magna. Sed gravida odio ultrices ultrices egestas. Vivamus in enim nibh. Proin at suscipit nunc, in vestibulum odio. Sed vestibulum mattis posuere. Nullam posuere nec ex a dapibus. Proin id fringilla erat.</p>

        </div>
        <div class="col-md-4">
          <h2>O que você pode fazer</h2>
          <img src="img/logo.jpeg" style="float:left; padding-right: 15px; padding-bottom: 1px;" alt="">
          <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada euismod libero eget vulputate. Nunc massa nisl, suscipit et posuere eget, elementum sed lorem. Nullam tincidunt facilisis venenatis. Ut nisi tortor, luctus pretium efficitur molestie, pellentesque quis quam. Sed lobortis justo eget egestas dapibus. Quisque pellentesque egestas mi vel iaculis. Phasellus placerat enim at sem tristique facilisis.

          Etiam velit nunc, pretium vel pulvinar vel, lacinia eget sapien. Donec risus sapien, porta at mollis ac, pretium eu elit. Pellentesque euismod nibh ac diam consectetur, id interdum nibh pulvinar. Maecenas sit amet dapibus nulla. Etiam vehicula sem vitae urna ornare eleifend. Cras posuere feugiat lectus sit amet volutpat. Phasellus at fringilla lacus, ac sodales metus. Mauris in lorem ligula. Vivamus ornare ex a mollis pellentesque. Quisque finibus molestie libero, at cursus erat tristique a.</p>

        </div>


      </div>

    </div>


  </section>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Política de privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos de uso</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>

<!-- Plugins JQuery  e Popper necessários para o Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>








<html>
