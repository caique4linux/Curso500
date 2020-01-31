<?php
  require_once('./acoes/registro.php');

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (empty($username) || empty($nome) || empty($senha)) {
      $resultado = "Todos campos são obrigatórios";
    } else {
      $resultado = cadastrarUsuario($username, $nome, $senha, $conexao);
    }
  }

?>
<div class="container">
  <?php if (isset($resultado)) : ?>
    <div class="alert alert-danger" role="alert">
      <?= $resultado; ?>
    </div>
  <?php endif ?>
  <form method="post">
    <div class="form-group">
      <label for="username">Usuário</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <button type="submit" class="btn btn-success">Registrar</button>
  </form>
</div>