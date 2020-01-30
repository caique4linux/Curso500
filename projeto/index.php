<?php

require_once('./lib/config.php');
require_once('./lib/banco.php');

require_once('./cabecalho.php');

$paginas = [
    'login',
    'registro'
];

if (isset($_GET['pagina']) && in_array($_GET['pagina'], $paginas)) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'login';
}

session_start();

require_once("./paginas/{$pagina}.php");

require_once('./rodape.php');

mysqli_close($conexao);