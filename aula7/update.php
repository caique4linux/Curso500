<?php

require_once './db-mysql.php';

$email = 'maria.oliveira@gmail.com';
$id = 2;
$update = 'UPDATE usuario SET email = ? WHERE id = ?';

$stmt = mysqli_stmt_init($conexao);

if (mysqli_stmt_prepare($stmt, $update)) {
    mysqli_stmt_bind_param($stmt, "si", $email, $id);

    mysqli_stmt_execute($stmt);

    $linhas = mysqli_stmt_affected_rows($stmt);

    if ($linhas > 0) {
        print("Atualização realizada com sucesso ! $linhas foram atualizadas!");
    }

    mysqli_stmt_close($stmt);
} else {
    $erros = mysqli_stmt_error_list($stmt);
    foreach ($erros[0] as $chave => $valor) {
        echo "$chave : $valor <br>";
    }
}

mysqli_close($conexao);
