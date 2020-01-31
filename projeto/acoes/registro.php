<?php

function cadastrarUsuario($username, $nome, $senha, $conexao)
{
    $username = trim($_POST['username']);
    $username = str_replace(' ', '', $username);
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);
    $senha = password_hash($senha, PASSWORD_BCRYPT);

    $criar = "INSERT INTO usuario (username, nome, senha) VALUES " .
        "(?, ?, ?)";

    $stmt = mysqli_stmt_init($conexao);
    if (mysqli_stmt_prepare($stmt, $criar)) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $nome, $senha);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) === 1) {
            header('Location: ?pagina=login&mensagem=cadastrado');
        }

        return "Usuário não criado!";

        mysqli_stmt_close($stmt);
    } else {
        $e = mysqli_stmt_error_list($stmt);
        return $e[0]['error'];
    }
}
