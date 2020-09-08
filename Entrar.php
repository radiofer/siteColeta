<?php

  require __DIR__ . '/vendor/autoload.php';

  $erro = isset ($_GET['erro']) ? $_GET['erro'] : 0;

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

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>

<body class="text-center">

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
              <a href="#" class="nav-link">Entrar</a>
            </li>
          </ul>
        </div>
      </div> <!-- fim do container da barra de navegação -->
    </nav>
  </header><!-- fim da configuração da barra de navegação -->
  <!-- Corpo do site -->
  <form class="form-signin"action="administrador.php" method="post">
    <img class="mb-4" src="img/logo.jpeg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
    <!--div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar
      </label>
    </div-->
    <button class="btn btn-lg btn-primary btn-block" type="submit"id="botao_logar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  </form>
  <?php
    if($erro == 1){
      echo 'Usuário não cadastrado';
    }
   ?>
   <!-- Rodapé -->

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
