<?php

  require __DIR__ . '/vendor/autoload.php';
  
  session_start();
  if(!isset($_SESSION['administrador'])) {
    header('Location: Index.php?erro=1');
  }
  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');

  $deletar_mensagem = $_POST ['exclui_msg_adm'];

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();


  $sql = "DELETE FROM faleConosco WHERE id_usuario = '$deletar_mensagem'";


  $retorno_msg = mysqli_query($link, $sql);

  if ($retorno_msg) {
    while ($msgRegistrada = mysqli_fetch_array($retorno_usuario, MYSQLI_ASSOC)) {

      echo $msgRegistrada;

    }
  } else {
    echo mysqli_error ($link);
  }
?>
