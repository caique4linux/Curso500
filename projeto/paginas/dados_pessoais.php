<?php 
    require_once ('./acoes/dados_pessoais.php');

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        if (empty($id) || empty($username) || empty($nome) || empty($email)) {
            $resultado = false;
        } else {
            $resultado = atualizaDados($id, $username, $nome, $senha, $email, $conexao);
        }
    }

    $usuario = buscaUsuarioLogado($conexao);
?>
<div class="container">
    <?php if(isset($resultado) && !$resultado): ?>
        <div class="alert alert-danger" role="alert">
            Falha ao atualizar dados!
        </div>
    <?php elseif(isset($resultado) && $resultado): ?>
        <div class="alert alert-success" role="alert">
            Dados atualizados!
        </div>
    <?php endif; ?>
<form method="post">
<input type="hidden" class="form-control" id="id" name="id" value="<?php if(isset($usuario)) { echo $usuario['id']; } ?>">
  <div class="form-group">
    <label for="username">Usuário</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($usuario)) { echo $usuario['username']; } ?>">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($usuario)) { echo $usuario['nome']; } ?>">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($usuario)) { echo $usuario['email']; } ?>">
  </div>

  
  <div class="form-group">
    <label for="ultimo_login">Ultimo Login</label>
    <input type="text" class="form-control" id="ultimo_login" name="ultimo_login" value="<?php if(isset($usuario)) { echo date_format(date_create($usuario['ultimo_login']), 'd/m/Y H:i:s'); } ?>">
  </div>


  <button type="submit" class="btn btn-success">Atualizar</button>
</form>
</div>
</div>