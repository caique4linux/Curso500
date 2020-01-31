<?php
    require_once('./acoes/login.php');

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $senha = $_POST['senha'];

        $resultado = validaLogin($username, $senha, $conexao);
    }
?>
<div class="container">
    <?php if(isset($_GET['mensagem'])): ?>
        <div class="alert alert-success" role="alert">
            Usuário cadastrado com sucesso!
        </div>
    <?php endif; ?>
    <?php if(isset($resultado)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $resultado; ?>
        </div>
    <?php endif; ?>
<form method="post">
  <div class="form-group">
    <label for="username">Usuário</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
</form>

<br>
<a class="btn btn-large btn-primary" href="?pagina=registro">Registrar-se</a>
</div>