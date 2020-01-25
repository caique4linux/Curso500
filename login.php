<?php

session_start();

if (isset($_SESSION['logado']) && 
    $_SESSION['logado'] === true) {
    header('Location: menu.php');
}

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if (strtolower($usuario) === "caique" &&
            $senha === "123456") {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $usuario;
                header('Location: menu.php');
            }
    }


?>
<form method="post">
    <label>Usuário: </label>
    <input type="text" name="usuario">
    <br>
    <label>Senha: </label>
    <input type="password" name="senha">
    <br>
    <button type="submit">Entrar</button>
</form>