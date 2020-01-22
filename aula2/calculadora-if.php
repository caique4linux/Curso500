<?php

// Fazer uma calculadora com operações básicas
// + - * /
// Utilizar IF para checar qual operação a ser realizada

$numero1 = 10;
$numero2 = 20;
$operacao = "*";

if ($operacao === "+") {
    echo $numero1 + $numero2;
} elseif ($operacao === "-") {
    echo $numero1 - $numero2;
} elseif ($operacao === "/") {
    echo $numero1 / $numero2;
} elseif ($operacao === "*") {
    echo $numero1 * $numero2;
}