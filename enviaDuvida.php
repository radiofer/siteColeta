<?php

require __DIR__ . '/vendor/autoload.php';

    
//Conexão com o script do banco de dados
require_once('bd_coletaSeletiva.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$pergunta = $_POST['texto'];

//echo ($nome);

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();

  $sql = "insert into faleConosco(nome, email, pergunta) values ('$nome', '$email', '$pergunta') ";

  //Execução da requisição
  if (mysqli_query($link, $sql)) {
    echo 'Parabéns! Sugestão enviado com sucesso.';
  } else {
    echo 'Opa! Erro ao enviar.';
  }
?>