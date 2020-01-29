<?php

require_once './db-mysql.php';

$email = "%gmail%";
$select = "SELECT * FROM usuario WHERE email LIKE ?";

$stmt = mysqli_stmt_init($conexao);

if (mysqli_stmt_prepare($stmt, $select)) {
    mysqli_stmt_bind_param($stmt, "s", $email);

    mysqli_stmt_execute($stmt);

    if ($resultado = mysqli_stmt_get_result($stmt)) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            foreach ($linha as $campo => $valor) {
                echo "$campo : $valor <br>";
            }
            echo '<hr>';
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conexao);
