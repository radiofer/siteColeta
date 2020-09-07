<<?php

  require __DIR__ . '/vendor/autoload.php';

  session_start();
  if(!isset($_SESSION['administrador'])) {
    header('Location: Index.php?erro=1');
  }
  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');

  $nome_usuario = $_POST ['nome_usuario'];

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();


  $sql = "SELECT * FROM usuarios WHERE usuario like '%$nome_usuario%'";


  $retorno_usuario = mysqli_query($link, $sql);

  if ($retorno_usuario) {
    while ($textoRegistrado = mysqli_fetch_array($retorno_usuario, MYSQLI_ASSOC)) {
      echo '<a class="list-group-item">';
        echo '<h6>Usuário: '.$textoRegistrado['usuario']. ' - <small>Telefone: '.$textoRegistrado['telefone'].'<small></h6>';
      echo '</a>';
      echo '<div class="input-group-append">';
        echo '<button type="button" name="" class="btn btn-outline-secondary" id="exclui_usuario" data-del_user="'.$textoRegistrado['usuario'].'">Excluir</button>';
      echo '</div>';
    echo '<div class="clearfix"></div>';
    }
  } else {
    echo mysqli_error ($link);
  }
?>
