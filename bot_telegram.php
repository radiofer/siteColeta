<<?php

  require __DIR__ . '/vendor/autoload.php';

  //Conexão com o script do banco de dados


  require_once('bd_coletaSeletiva.php');

  define('BOT_TOKEN', '1365449306:AAFZokJYADtR-Z_1huQ0wai0NehiPKoElu8');
  define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');


  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();


  $sql = "SELECT mensagem FROM mensagens";


  $retorno_mensagem = mysqli_query($link, $sql);

  function enviamsg($retorno_mensagem){
    $
    $msg = $retorno_mensagem['mensagem']
    while ($msg != '') {
      sendMessage("sendMessage")
    }

  }

  if ($retorno_usuario) {
    while ($textoRegistrado = mysqli_fetch_array($retorno_usuario, MYSQLI_ASSOC)) {

      echo $textoRegistrado;

    }
  } else {
    echo mysqli_error ($link);
  }
?>
