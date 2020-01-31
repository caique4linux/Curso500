<?php

function cadastrarProduto($nome, $descricao, $tipo, $preco, $conexao)
{
    $cadastrar = 'INSERT INTO produto (nome, descricao, tipo, preco) 
        VALUES (?, ?, ?, ?)';

    $stmt = mysqli_stmt_init($conexao);

    if(mysqli_stmt_prepare($stmt, $cadastrar)) {
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $descricao,
            $tipo, $preco);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) === 1) {
            header('Location: ?pagina=produtos');
        }
    } else {
        $erro = mysqli_stmt_error_list($stmt);
        return $erro[0]['error'];
    }

    mysqli_stmt_close($stmt);
    return "Falha ao cadastrar produto!";
}