<?php

function checkParImpar(string $tipo, array $numeros)
{
    $retorno = [];

    if ($tipo === 'P') {
        foreach ($numeros as $numero) {
            if ($numero % 2 === 0) $retorno[] = $numero;
        }
    } else if ($tipo === 'I') {
        foreach ($numeros as $numero) {
            if ($numero % 2 === 1) $retorno[] = $numero;
        }
    }
    return $retorno;
}

function calculadora(string $operacao, array $numeros)
{
    $resultado = ($operacao === '*' ? 1 : 0);
    foreach ($numeros as $numero) {
        switch ($operacao) {
            case '+':
                $resultado += $numero;
            break;
            case '-':
                $resultado -= $numero;
            break;
            case '*':
                $resultado *= $numero;
            break;
        }
    }
    return $resultado;
    // switch($operacao) {
    //     case '+':
    //         $resultado = 0;
    //         foreach ($numeros as $numero) {
    //             $resultado += $numero;
    //         }
    //         return $resultado;
    //     break;
    //     case '-':
    //         $resultado = 0;
    //         foreach ($numeros as $numero) {
    //             $resultado -= $numero;
    //         }
    //         return $resultado;
    //     break;
    //     case '*':
    //         $resultado = 1;
    //         foreach ($numeros as $numero) {
    //             $resultado *= $numero;
    //         }
    //         return $resultado;
    //     break;
    // }
}

function calculaNotas(array &$alunos)
{
    foreach ($alunos as &$aluno) {
        $notas = $aluno['notas'];
        $media = ($notas[0] + $notas[1] + $notas[2]) / 3;
        $aluno['media'] = $media;
    }
}

function exibeNotas(array $alunos)
{
    foreach ($alunos as $aluno) {
        print("O aluno {$aluno['nome']} teve media {$aluno['media']}.<br>");
    }
}
