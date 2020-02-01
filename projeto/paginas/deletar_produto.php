<?php

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_GET['id'])) {
        $deleta = "DELETE FROM produto WHERE id = ?";

        $stmt = mysqli_stmt_init($conexao);

        if (mysqli_stmt_prepare($stmt, $deleta)) {
            mysqli_stmt_bind_param($stmt, "i", $_GET['id']);

            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
    }
}

header('Location: ?pagina=produtos');
