<?php

  require __DIR__ . '/vendor/autoload.php';

  session_start();

  //Conexão com o script do banco de dados
  require_once('bd_coletaSeletiva.php');


  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //Verifica adminitrador cadastrado
  $verifica = " SELECT * FROM administradores WHERE administrador = '$email' AND senha = '$senha'";

  //Instancia da classe BancoDeDados
  $BDColSel = new bd();
  $link = $BDColSel->conexaoBD();

  //Resposta de validação - consulta ao banco
  $resposta_usuario = mysqli_query($link, $verifica);

  if ($resposta_usuario) {
    $dados_usuario = mysqli_fetch_array($resposta_usuario);
    if (isset ($dados_usuario['administrador'])) {
      $_SESSION['administrador'] = $dados_usuario['administrador'];
      header ('Location: home.php');
    } else {
      header('Location:Entrar.php?erro=1');
    }

  } else {
    echo 'Usuário não cadastrado';
  }

  /*
  //Inserção de dados do usuário no banco de dados
  $sql = "insert into administradores(adminitrador, senha) values ('$email', '$senha')";

  //Execução da requisição
  if (mysqli_query($link, $sql)) {
    echo 'Parabéns! Inscrição realizada com sucesso.';
  } else {
    echo 'Opa! Erro ao so inscrever.';
  };*/
?>
