<?php

// Fazer a tabuada de um numero especifico. Ex:
// 1 * 1 = 1
// 1 * 2 = 2 ...
// Utilizar loop for

$tabuada = 1;

for ($i = 0; $i <= 10 && $tabuada <= 10; $i++) {
    echo "$tabuada * $i = " . ($tabuada * $i) . "<br>";

    if ($i === 10) {
        $i = 0;
        $tabuada++;
        echo "<br>";
    }
}