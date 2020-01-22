<?php

$nota1 = 10;
$nota2 = 7;
$nota3 = 5;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 6) {
    echo "Passou";
} elseif($media >= 4) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}