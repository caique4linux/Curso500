<?php

require_once './db-mysql.php';

$select = "SELECT * FROM usuario";

if ($resultado = mysqli_query($conexao, $select)) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        foreach ($linha as $coluna => $valor) {
            echo "$coluna : $valor <br>";
        }
        echo '<hr>';
    }
}

mysqli_free_result($resultado);

mysqli_close($conexao);