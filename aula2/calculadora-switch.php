<?php

// Fazer uma calculadora com operações básicas
// + - * /
// Utilizar SWITCH para checar qual operação a ser realizada

$numero1 = 5;
$numero2 = 2;
$operacao = "=";

switch ($operacao) {
    case '+':
        echo "{$numero1} + {$numero2} = " . ($numero1+$numero2);
    break;
    case '-':
        echo "{$numero1} - {$numero2} = " . ($numero1-$numero2);
    break;
    case '/':
        echo "{$numero1} / {$numero2} = " . ($numero1/$numero2);
    break;
    case '*':
        echo "{$numero1} * {$numero2} = " . ($numero1*$numero2);
    break;
    default:
        echo "Operação inválida!";
}