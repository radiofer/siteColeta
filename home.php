<?php

  require __DIR__ . '/vendor/autoload.php';

  session_start();
  if(!isset($_SESSION['administrador'])) {
    header('Location: Index.php?erro=1');
  }
?>

<!DOCTYPE HTML>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Associação Nova Conquista - Juína - MT</title>

  <!-- links para as bibliotecas Bootstrap.js e JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="icon" href="img/logo.jpeg">

  <!-- link para o arquivo css e bootstrap.css-->
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


  <!-- Capturar evento de botão e texto -->
  <script type="text/javascript">
    $(document).ready(function(){

      $('#exibe_Usuario').hide();

      //Script de envio de mensagem

      $("#botao_texto").click(function(){

        if($("#texto_mensagem").val().length > 0) {

          $.ajax({
            url: 'enviaTexto.php',
            method: 'post',
            data: $('#texto_form').serialize(),
            success: function(data) {
              $('#texto_mensagem').val('');
              recebeMensagem();
            }
          });
        }
      });

      function recebeMensagem(){
        $.ajax({
          url: 'recuperaTexto.php',
          success: function(data){
            $('#textoRecuperado').html(data);

          }

        });
      }
      recebeMensagem();

      //Script de procura de usuarios

      $("#botao_procura_usuario").click(function(){

        if($("#nome_usuario").val().length > 0) {

            $.ajax({
              url: 'procura_usuarios.php',
              method: 'post',
              data: $('#procura_usuario').serialize(),
                success: function(data) {
                  $('#exibe_Usuario').show();
                  $('#usuario_encontrado').html(data);

                  $('#exclui_usuario').click(function(){
                    var delete_user = $(this).data('del_user');
                    $.ajax({
                      url: 'exclui_usuario.php',
                      method: 'post',
                      data: {excluir_por_adm: delete_user},
                      success: function(data){
                        alert('Usuário excluído com sucesso');
                      }
                    });

                  });
                }
            });

          }
        });

    });
  </script>
</head>

<body>

  <!-- Barra de navegação -->
  <header>
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
              <a href="home.php" class="nav-link">Home<span class="sr-only">(visivel)</span> </a>
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
              <a href="sair.php" class="nav-link">Sair</a>
            </li>
          </ul>
        </div>
      </div> <!-- fim do container da barra de navegação -->
    </nav>
  </header><!-- fim da configuração da barra de navegação -->

  <br>

  <!-- Corpo da pagina -->

  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5>Painel de usuários</h5>
            <h6> Bem vindo <?= $_SESSION['administrador'] ?></h6>
            <div class="col-12">Usuários <br> 1 </div>
          </div>
          <div class="card-header">Procurar usuários</div>
            <form class="input-group" action="" method="post" id="procura_usuario" class="">
              <input type="text" class="form-control" name="nome_usuario" id="nome_usuario" value="" placeholder="Digite o nome do usuário">
              <div class="input-group-append">
                <button type="button" id="botao_procura_usuario" name="button" class="btn btn-outline-primary" >Procurar</button>
              </div>

            </form>
          <div href="#" class="list-group" id="exibe_Usuario">
            <div class="list-group-item" id="usuario_encontrado"></div>
          </div>


          </div>


        </div>

      <div class="col-6">
        <div class="card">
          <div class="card-body">
          <div class="card-title">Envio de mensagens</div>
            <form class="input-group" id="texto_form">
              <input type="text" name="mensagem_texto" id="texto_mensagem" value=""class="form-control" placeholder="Digite aqui a mensagem" maxlength="100">
              <div class="input-group-append">
                  <button class="btn btn-outline-secondary" id="botao_texto" type="button">Enviar</button>
              </div>
            </form>
          </div>
          <div class="list-group">
            <div class="list-group-item" id="textoRecuperado"></div>

          </div>

        </div>

      </div>
    <!--div class="col"></div-->
    </div>

  </div>

<!-- Plugins JQuery  e Popper necessários para o Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<html>
