<?php

require_once './lib/funcoes.php';

// Dados as variaves $a, $b, $c passadas pelo usuario
// Criar uma funcao que calcule a equação de 2º grau
// Utilizar funções para reaproveitar ao máximo o código
// Formulas:
// delta = b² - 4 * a * c
// x1 = (-b + raiz de delta) / 2 * a
// x2 = (-b - raiz de delta) / 2 * a
// Exibir valor de delta, x1 e x2
// Caso x1 e x2 seja iguais, informar

$a = 0;
$b = 0.35;
$c = 35;

$calculo = calculaFuncao2Grau($a, $b, $c);

echo "Delta = {$calculo['delta']}<br>";
echo "X1 = {$calculo['x1']}<br>";
echo "X2 = {$calculo['x2']}<br>";
echo ($calculo['x1'] === $calculo['x2']) ? "X1 e X2 são iguais!" : "";