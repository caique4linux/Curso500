<?php

// Calcular se é maior ou menor de idade
// Calcular se numero é par ou impar

$idade = 16 ;
$acompanhado = true;

if (($idade >= 18) || ($idade >= 16 && $acompanhado)) {
    echo "Pode entrar";
} else {
    echo "Não pode entrar";
}

echo "<br><br>";

$numero = 11;

if (!($numero % 2)) {
    echo "Par";
} else {
    echo "Impar";
}