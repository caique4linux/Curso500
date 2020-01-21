<?php

$a = 2;
$b = 3;
$c = "3 variaveis";

$soma = $a + $b;
$subtracao = $a - $b;
$divisao = $a / $b;
$multiplicacao = $a * $b;
$resto = $a % $b;
$potencia = $a ** $b;

echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Divisão: $divisao <br>";
echo "Multiplicação: $multiplicacao <br>";
echo "Resto: $resto <br>";
echo "Potencia: $potencia <br>";
echo "Casting do PHP: " . ($a + $b + $c);