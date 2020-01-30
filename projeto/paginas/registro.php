<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = trim($_POST['username']);
        $username = str_replace(' ', '', $username);
        $nome = trim($_POST['nome']);
        $senha = trim($_POST['senha']);
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        
        $criar = "INSERT INTO usuario (username, nome, senha) VALUES ".
                "(?, ?, ?)";
        
        $stmt = mysqli_stmt_init($conexao);
        if (mysqli_stmt_prepare($stmt, $criar)) {
            mysqli_stmt_bind_param($stmt, "sss", $username, $nome, $senha);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) === 1) {
                header('Location: ?pagina=login&mensagem=cadastrado');
            }

            $erro = "Usuário não criado!";

            mysqli_stmt_close($stmt);
        } else {
            $e = mysqli_stmt_error_list($stmt);
            $erro = $e[0]['error'];
        }
    }
?>
<div class="container">
    <?php if (isset($erro)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro; ?>
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