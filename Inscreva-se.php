<?php

  require __DIR__ . '/vendor/autoload.php';

  $erro_telefone = isset($_GET['erro_telefone']) ? $_GET['erro_telefone'] : 0;
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
              <a href="#" class="nav-link">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a href="Inscreva-se.php" class="nav-link">Inscrever-se</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Fale conosco</a>
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
  <div class="container">
   <div class="py-5 text-center">
     <h2>Inscrição</h2>
     <p class="lead">Receba notificações dos dias e horários da coleta seletiva em seu bairro, inscreva-se!</p>
   </div>
  <div class="row row-cols-3">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form class="" action="cadastro_notificacao.php" method="post">
        <div class="form-row">
          <div class="col-md-10">
            <label class="" for="formularioNome">Nome Completo</label>
            <input type="text" class="form-control" id="formularioNome" name="nome" value="" placeholder="Digite aqui o seu nome">
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col-md-10">
            <label for="formularioTelefone" class="">Número do seu Telefone</label>
            <input type="number" class="form-control" id="formularioTelefone" name="telefone" value="" placeholder="Digite aqui o seu telefone">
                <?php
                  if ($erro_telefone) {
                    echo '<font style = "color:red">Esse contato já foi cadastrado</font>';
                          }
                ?>
          </div>
        </div>
              <br>
              <button type="submit" class="btn btn-primary">Inscrever</button>
      </form>
    </div>
      <div class="col-md-3"></div>
  </div>

  </div>

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
