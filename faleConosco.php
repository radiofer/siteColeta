<!doctype html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Associação Nova Conquista - Juína - MT</title>
    <link rel="icon" href="img/logo.jpeg">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

     <!-- link para o arquivo css-->
    <link rel="stylesheet" href="estilo.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">
      <!-- Barra de navegação -->
  </header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparencia" style="background-color: #F0FFFF">
      <div class="container">
        <!-- Botão de colapso -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" name="button" data-target="#escondemenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo -->
        <div class="">
          <a href="#" class="navbar-brand"><span id="img-barra" class="">Nova Conquista</span></a>
        </div>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="escondemenu">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="Index.php" class="nav-link">Página inicial<span class="sr-only">(visivel)</span> </a>
            </li>
            <li class="nav-item">
              <a href="quemsomos.php" class="nav-link">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a href="Inscreva-se.php" class="nav-link">Inscrever-se</a>
            </li>
            <li class="nav-item">
              <a href="faleConosco.php" class="nav-link">Fale conosco</a>
            </li>
            <li class="nav-item">
              <a href="Entrar.php" class="nav-link">Entrar</a>
            </li>
          </ul>
        </div>
      </div> <!-- fim do container da barra de navegação -->
    </nav>
  </header><!-- fim da configuração da barra de navegação -->

  <br>

    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/logo.jpeg" alt="" width="72" height="72">
    <h2>Faça aqui a sua pergunta</h2>   
  </div>

  

  <div class="row">
    <div class="col-md-3 mb-4">
      
    </div>
    <div class="col-md-6">
      <h4 class="mb-3">Prencha o formulário</h4>
      <form class="needs-validation" action="enviaDuvida.php" method="post">
          
          <div class="mb-3">
            <label for="formularioFaleConosco">Nome Completo</label>
            <input type="text" class="form-control" id="formularioFaleConosco" placeholder="" name="nome" value="" required>
            <div class="invalid-feedback">
              Por favor preencha este campo
            </div>
          </div>
          
     
          <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" name="email">
              <div class="invalid-feedback">
              Por favor digite um e-mail válido.
              </div>
            </div>

          <div class="mb-3">
            <label for="duvida">Dúvida ou sugestão</label>
            <textarea type="text" class="form-control" id="duvida" placeholder="" name="texto" required maxlength="120"></textarea>
            <div class="invalid-feedback">
              Por favor, digite a sua dúvida ou sugestão.
            </div>
          </div>

        
     <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>
    </div>
  </div>
  </form>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Associação Nova Conquista</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>

