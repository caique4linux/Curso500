<?php

function buscarProduto($id, $conexao)
{
    $busca = "SELECT id, nome, descricao, tipo, preco FROM produto WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $busca)) {
        mysqli_stmt_bind_param($stmt, "i", $id);

        mysqli_stmt_execute($stmt);

        if ($resultado = mysqli_stmt_get_result($stmt)) {
            return mysqli_fetch_assoc($resultado);
        }
    }

    mysqli_stmt_close($stmt);

    return false;
}

function atualizaProduto($id, $nome, $descricao, $tipo, $preco, $conexao)
{
    $atualiza = "UPDATE produto SET nome = ?, descricao = ?, tipo = ?, " .
        "preco = ? WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $atualiza)) {
        mysqli_stmt_bind_param($stmt, "sssdi", $nome, $descricao, $tipo, 
            $preco, $id);

        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) === 1) {
            header('Location: ?pagina=produtos');
        }
    } else {
        $erro = mysqli_stmt_error_list($stmt);
        return $erro[0]['error'];
    }

}
