<?php

require('../lib/funcoes.php');

// Calcular peso ideal
// Variavel com sexo
// Variavel com Altura em metros
// Formula Homem: (72.7 * altura) - 58
// Formula Mulher: (62.1 * altura) - 44.7

$sexo = "F";
$altura = 1.80;

echo calculaPesoIdeal($sexo, $altura);