<?php

require_once './lib/funcoes.php';

// Fazer uma função que recebe um parametro (P ou I) e uma lista de numeros
// Caso parametro seja P, retornar todos numeros pares da lista passada
// Caso parametro seja I, retornar todos numeros impares da lista passada

print_r(checkParImpar('I', [1,2,3,4,5,6,7,8,9,10,2,4,57,45,876,454]));