<?php

function buscaTodosProdutos($conexao, $nome) {
    $busca = "SELECT id, nome, descricao, preco FROM produto";
    if (!empty($nome)) {
        $nome = "%{$nome}%";
        $busca = "SELECT id, nome, descricao, preco FROM produto WHERE nome LIKE ?";
    }

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $busca)) {
        if (!empty($nome)) {
            mysqli_stmt_bind_param($stmt, "s", $nome);
        }

        mysqli_stmt_execute($stmt);

        return mysqli_stmt_get_result($stmt);
    }

    return false;
}