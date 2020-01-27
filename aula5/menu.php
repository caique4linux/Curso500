<?php

session_start();
//$_SESSION['logado'] = false;

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
} else {
    echo "Seja bem-vindo(a), {$_SESSION['usuario']}";
}