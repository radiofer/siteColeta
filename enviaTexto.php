<?php

    require __DIR__ . '/vendor/autoload.php';

    session_start();

    session_start();
    if(!isset($_SESSION['administrador'])) {
      header('Location: Index.php?erro=1');
    }

  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');


  //Recupera mensagem de textos
  $texto_mensagem = $_POST['mensagem_texto'];

  //Teste de postagem vazia
  if ($texto_mensagem == "") {
    die();
  }

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();

  $sql = "insert into mensagens(mensagem) values ('$texto_mensagem') ";

  mysqli_query($link, $sql);


?>
