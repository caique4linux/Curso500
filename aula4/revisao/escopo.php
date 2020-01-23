<?php

$var1 = "Banana";
$var2 = "Maça";
define('PI', 3.14);

function mostrabanana() {
    echo '$var1 = ' . $var1 . '<br>';
}

function mostraMaca() {
    global $var2;
    echo '$var2 = ' . $var2 . '<br>';
}

function mostraPi() {
    echo 'PI = ' . PI . '<br>';
}

mostrabanana();
mostraMaca();
mostraPi();