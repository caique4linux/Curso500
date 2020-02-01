<?php

function validaLogin($username, $senha, $conexao)
{
    $username = trim($username);
    $username = str_replace(' ', '', $username);
    $senha = trim($senha);

    $busca = "SELECT id, senha FROM usuario WHERE username = ?";

    $stmt = mysqli_stmt_init($conexao);
    if (mysqli_stmt_prepare($stmt, $busca)) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        if ($resultado = mysqli_stmt_get_result(($stmt))) {
            $registro = mysqli_fetch_assoc($resultado);
            if ($registro) {
                if (password_verify($senha, $registro['senha'])) {
                    $_SESSION['logado'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $registro['id'];
                    atualizaHoraLogin($registro['id'], $conexao);
                    header("Location: ?pagina=home");
                }
            }
            return "Usuário ou senha inválido!";
        }
        mysqli_stmt_close($stmt);
    }
}

function atualizaHoraLogin($id, $conexao)
{
    $atualiza = "UPDATE usuario SET ultimo_login = ? WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $atualiza)) {
        $data = new DateTime();
        mysqli_stmt_bind_param($stmt, "ss", $data->format('Y-m-d H:i:s'), $id);

        mysqli_stmt_execute($stmt);
    }
}