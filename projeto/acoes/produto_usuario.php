<?php

function buscarRelacao($conexao)
{
    $buscar = "SELECT p.id,p.nome,p.descricao,p.tipo,p.preco,u.username FROM usuario u " .
    "INNER JOIN produto_usuario pu ON u.id = pu.usuario_id " .
    "INNER JOIN produto p ON p.id = pu.produto_id";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $buscar)) {
        mysqli_stmt_execute($stmt);

        return mysqli_stmt_get_result($stmt);
    }

    mysqli_stmt_close($stmt);
    
    return false;
}