<?php

require_once './lib/funcoes.php';

$lista = [
    'fruta1' => 'banana',
    'fruta2' => 'maça',
    'fruta3' => 'abacate',
    10 => ['abacaxi'],
    'manga'
];

foreach ($lista as $chave => $fruta) {
    echo 'Item ' . $chave .' valor ' . $fruta . '<br>';
}

echo '<br>';

 for ($i = 0; $i < count($lista); $i++) {
    echo 'Item ' . $i . ' valor ' . $lista[$i] . '<br>';
 }