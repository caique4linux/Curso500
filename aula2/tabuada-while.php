<?php

// Fazer a tabuada de um numero especifico. Ex:
// 1 * 1 = 1
// 1 * 2 = 2
// etc...
// Utilizar loop while

$numero = 3;

$valor = 1;

while ($valor <= 10) {
    $resultado = $numero * $valor;
    echo "$numero * $valor = $resultado<br>";
    $valor++;
}
