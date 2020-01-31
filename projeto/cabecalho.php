<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <title>Projeto - Curso 500</title>
  </head>
  <body>
  <?php if(isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#">Projeto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=dados_pessoais">Dados pessoais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=produtos">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-danger" href="?pagina=sair">Sair</a>
      </li>
    </ul>
  <?php endif; ?>