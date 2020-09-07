<?php

    require __DIR__ . '/vendor/autoload.php';

    session_start();

    if(!isset($_SESSION['administrador'])) {
      header('Location: Index.php?erro=1');
    }


  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');


    //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();

  //$sql = "SELECT * FROM mensagens ORDER BY data_mensagem DESC";
  $sql = "SELECT msg.mensagem as mensagem, date_format(msg.data_mensagem, '%d %m %Y %T') as data_mensagem FROM mensagens AS msg";
  $sql.= " ORDER BY data_mensagem DESC";

  $retorno_texto = mysqli_query($link, $sql);

  if ($retorno_texto) {
    while ($textoRegistrado = mysqli_fetch_array($retorno_texto, MYSQLI_ASSOC)) {
      echo '<div class="card-bh-light">';
        echo '<a href="#" class="card-header">';
          echo '<h6 class="list-group-item">Mensagem registrada em - '.$textoRegistrado['data_mensagem'].'</h6>';
        echo '</a>';
        echo '<div class="card-body">';
          echo '<p class="card-text">'.$textoRegistrado['mensagem'].'</p>';
        echo '</div>';
      echo '</div>';
    }
  } else {
    echo mysqli_error ($link);
  }



?>
