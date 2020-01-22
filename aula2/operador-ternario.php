<?php

$numero = 11;

$ehPar = ($numero % 2 === 0) ? true : false;

if ($ehPar) {
    echo "O numero {$numero} é par!";
} else {
    echo "O numero {$numero} é impar!";
}