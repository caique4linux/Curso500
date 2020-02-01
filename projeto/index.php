<?php

require_once('./lib/config.php');
require_once('./lib/banco.php');

session_start();

require_once('./cabecalho.php');

$paginas = [
    'login',
    'registro',
    'home',
    'dados_pessoais',
    'sair',
    'produtos',
    'cadastrar_produto',
    'editar_produto',
    'deletar_produto',
    'comprar_produto',
    'produto_usuario'
];

if (isset($_GET['pagina']) && in_array($_GET['pagina'], $paginas)) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'login';
}

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    if (in_array($pagina, ['login', 'registro'])) {
        $pagina = 'home';
    }
} else {
    if(!in_array($pagina, ['login', 'registro'])) {
        $pagina = 'login';
    }
}

require_once("./paginas/{$pagina}.php");

require_once('./rodape.php');

mysqli_close($conexao);