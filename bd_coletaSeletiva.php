<?php
  require __DIR__ . '/vendor/autoload.php';
  /**
   *
   */
  class bd
  {

    //host
    private $host = 'localhost';

    //usuário
    private $usuario = 'root';

    //Senha
    private $senha = '';

    //Banco de Dados
    private $bancodeDados = 'coleta_seletiva';


    public function conexaoBD()
    {
      // conexão
      $confChar = mysqli_connect($this->host, $this->usuario, $this->senha, $this->bancodeDados);

      //configuração de caracteres UTF8
      mysqli_set_charset($confChar, 'utf8');

      //Teste de conexão
      if (mysqli_connect_errno()) {
        echo 'erro ao tentar conectara com o BD: '. mysqli_connect_error();
      }
      return $confChar;
    }
   }
 ?>
