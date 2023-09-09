<?php

function encontrarPares($array): array
{
// Inicializa um array vazio para armazenar os números pares
    $pares = [];

// Percorre o array para encontrar os números pares
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
// Se o número for par (ou seja, seu resto da divisão por 2 é zero), adiciona-o ao array de pares
            $pares[] = $numero;
        }
    }

// Retorna o array de números pares
    return $pares;
}

// Exemplo de uso da função:
$meuArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$resultado = encontrarPares($meuArray);
print_r($resultado);
