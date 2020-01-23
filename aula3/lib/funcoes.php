<?php

// delta = b² - 4 * a * c
function calculaDelta($a, $b, $c)
{
    $delta = pow($b, 2) - 4 * $a * $c;
    return $delta;
}

// x1 = (-b + raiz de delta) / 2 * a
// x2 = (-b - raiz de delta) / 2 * a
function calculaFuncao2Grau($a, $b, $c)
{
    $delta = calculaDelta($a, $b, $c);

    $x1 = (-$b + sqrt($delta)) / 2 * $a;
    $x2 = (-$b - sqrt($delta)) / 2 * $a;

    return [
        'x1' => $x1,
        'x2' => $x2,
        'delta' => $delta
    ];
}


function calculaPesoIdeal(string $sexo, float $altura)
{
    switch ($sexo) {
        case 'M':
            return calcula(72.7, 58, $altura);
        break;
        case 'F':
            return calcula(62.1, 44.7, $altura);
        break;
        default:
            return "Sexo inválido!";
    }
}

function calcula($a, $b, $altura) {
    return ($a * $altura) - $b;
}