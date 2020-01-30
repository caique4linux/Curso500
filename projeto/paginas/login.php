<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = trim($_POST['username']);
        $username = str_replace(' ', '', $username);
        $senha = trim($_POST['senha']);

        $busca = "SELECT senha FROM usuario WHERE username = ?";

        $stmt = mysqli_stmt_init($conexao);
        if(mysqli_stmt_prepare($stmt, $busca)) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_execute($stmt);
            if ($resultado = mysqli_stmt_get_result(($stmt))) {
                $registro = mysqli_fetch_assoc($resultado);
                if($registro) {
                    if (password_verify($senha, $registro['senha'])) {
                        $_SESSION['logado'] = true;
                        $_SESSION['username'] = $username;
                        header("Location: ?pagina=home");
                    } 
                }
                $erro = "Usuário ou senha inválido!";
            }
            mysqli_stmt_close($stmt);
        }
    }
?>
<div class="container">
    <?php if(isset($_GET['mensagem'])): ?>
        <div class="alert alert-success" role="alert">
            Usuário cadastrado com sucesso!
        </div>
    <?php endif; ?>
    <?php if(isset($erro)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro; ?>
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