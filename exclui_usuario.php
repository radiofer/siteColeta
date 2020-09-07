<<?php

  require __DIR__ . '/vendor/autoload.php';
  
  session_start();
  if(!isset($_SESSION['administrador'])) {
    header('Location: Index.php?erro=1');
  }
  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');

  $deletar_usuario = $_POST ['excluir_por_adm'];

  if ($deletar_usuario == '') {
    die();
  }

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();


  $sql = "DELETE FROM usuarios WHERE usuario = '$deletar_usuario'";


  $retorno_usuario = mysqli_query($link, $sql);

  if ($retorno_usuario) {
    while ($textoRegistrado = mysqli_fetch_array($retorno_usuario, MYSQLI_ASSOC)) {

      echo $textoRegistrado;

    }
  } else {
    echo mysqli_error ($link);
  }
?>
