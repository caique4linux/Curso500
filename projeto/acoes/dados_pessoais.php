<?php

function buscaUsuarioLogado($conexao) {
    $busca = "SELECT id, username, nome, email FROM usuario WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $busca)) {
        mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
        mysqli_stmt_execute($stmt);

        if ($resultado = mysqli_stmt_get_result(($stmt))) {
            return mysqli_fetch_assoc($resultado);
        }

        mysqli_stmt_close($stmt);
    }

    return null;
}

function atualizaDados($id, $username, $nome, $senha, $email, $conexao) {
    $atualiza = "UPDATE usuario SET username = ?, nome = ?, email = ?";
    if (!empty($senha)) {
        $atualiza .= ", senha = ?";
    }
    $atualiza .= " WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $atualiza)) {
        if (!empty($senha)) {
            $senha = password_hash($senha, PASSWORD_BCRYPT);
            mysqli_stmt_bind_param($stmt, "ssssi", $username, $nome, $email, $senha, $id);
        } else {
            mysqli_stmt_bind_param($stmt, "sssi", $username, $nome, $email, $id);
        }

        mysqli_stmt_execute($stmt);

            $_SESSION['username'] = $username;
            return true;

    } else {
        $erro = mysqli_stmt_error_list($stmt);
        return false;
    }
}