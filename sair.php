<?php

  require __DIR__ . '/vendor/autoload.php';

  session_start();
  unset($_SESSION['administrador']);
  header('Location: Index.php');
?>
