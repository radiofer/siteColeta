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


  $sql = "SELECT * FROM faleConosco ORDER BY data_duvida desc";



  $retorno_mensagem= mysqli_query($link, $sql);

  if ($retorno_mensagem) {
    while ($textoRegistrado = mysqli_fetch_array($retorno_mensagem, MYSQLI_ASSOC)) {
        echo '<div class="card-bg-light">';
            echo '<h5 class="card-header">Mensagem enviada por: '.$textoRegistrado['nome'].'</h5>';
            echo '<a class="card-title"> E-mail: '.$textoRegistrado['email'].'</a>';
        echo '<div class="card-body">';
            echo '<label class="card-subtilte"> Mensagem: </label>';
            echo '<br>';
            echo '<textarea class="col-md-12" rows="3">'.$textoRegistrado['pergunta'].'</textarea>';
        echo '</div>';
      echo '</div>';
      echo '<button type="button" class="btn btn-outline-danger" id="apagafale" data-del_msg="'.$textoRegistrado['id_usuario'].'">Apagar Mensagem</button>';
    }
  } else {
    echo mysqli_error ($link);
  }
?>