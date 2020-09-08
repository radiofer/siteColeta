<?php

  require __DIR__ . '/vendor/autoload.php';

  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');


  $usuario = $_POST['nome'];
  $telefone = $_POST['telefone'];

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();

  $telefone_duplo = false;

  //Verificar redundancia
  //Usuario
  $sql = "SELECT * FROM usuarios WHERE telefone = '$telefone'";
  if ($resposta_usuario = mysqli_query($link, $sql)) {
    $dados_usuario = mysqli_fetch_array($resposta_usuario);
    if (isset($dados_usuario['telefone'])) {
      $telefone_duplo = true;
    }

  } else {
    echo 'algo de errado aconteceu';
  }

  if ($telefone_duplo) {
    $resposta_get= '';
    if ($telefone_duplo) {
      $resposta_get.='erro_telefone=1&';
    }
    header('Location: Inscreva-se.php?'.$resposta_get);
  }


  //Inserção de dados do usuário no banco de dados
  $sql = "insert into usuarios(usuario, telefone) values ('$usuario', '$telefone')";

  //Execução da requisição
  if (mysqli_query($link, $sql)) {
    echo 'Parabéns! Inscrição realizada com sucesso.';
  } else {
    echo 'Opa! Erro ao se inscrever.';
  };
?>
