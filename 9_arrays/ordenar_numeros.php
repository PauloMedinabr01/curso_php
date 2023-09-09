<?php

function ordenarNumeros($array)
{
// Utiliza a função sort() para ordenar o array em ordem crescente
    sort($array);

// Retorna o array ordenado
    return $array;
}

// Exemplo de uso da função:
$meuArray = [5, 2, 9, 1, 8, 3];

$arrayOrdenado = ordenarNumeros($meuArray);

print_r($arrayOrdenado);
