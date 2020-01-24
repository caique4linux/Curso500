<?php

require_once('./lib/funcoes.php');

// Dado a array:

$alunos = [
    [
        'nome' => 'João',
        'notas' => [10, 8, 5]
    ],
    [
        'nome' => 'Maria',
        'notas' => [6, 5, 3]
    ],
    [
        'nome' => 'José',
        'notas' => [9, 7, 4]
    ]
];

// Calcular e exibir a média aritimetica das notas de cada aluno
// Informar o nome do aluno antes de informar a nota
// Utilizar funções para tornar o código reutilizável

calculaNotas($alunos);
exibeNotas($alunos);