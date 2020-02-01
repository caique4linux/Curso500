<?php

if (isset($_GET['id'])) {
    $produtoId = $_GET['id'];
    $usuarioId = $_SESSION['id'];

    $buscaProduto = "SELECT id FROM produto WHERE id = ?";

    $stmt = mysqli_stmt_init($conexao);

    if (mysqli_stmt_prepare($stmt, $buscaProduto)) {
        mysqli_stmt_bind_param($stmt, "i", $produtoId);

        mysqli_stmt_execute($stmt);

        if ($resultado = mysqli_stmt_get_result($stmt)) {
            $dados = mysqli_fetch_assoc($resultado);
            if (!is_null($dados)) {
                mysqli_stmt_close($stmt);

                $stmt = mysqli_stmt_init($conexao);
                $compraProduto = "INSERT INTO produto_usuario ".
                "(usuario_id, produto_id) VALUES (?, ?)";

                if (mysqli_stmt_prepare($stmt, $compraProduto)) {
                    mysqli_stmt_bind_param($stmt, "ii", $usuarioId, $produtoId);

                    mysqli_stmt_execute($stmt);

                    header('Location: ?pagina=produtos');
                }
            }
        }
    }
}