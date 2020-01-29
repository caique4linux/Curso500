<?php

require_once './db-mysql.php';

$nome = "Caique";
$email = "caique.portela@4linux.com.br";
$senha = '4linux';

$insere = "INSERT INTO usuario (nome, email, senha) " .
            "VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $insere)) {
    print("Linha alteradas: " . mysqli_affected_rows($conexao));
} else {
    print("Erro: " . mysqli_error($conexao));
}

mysqli_close($conexao);