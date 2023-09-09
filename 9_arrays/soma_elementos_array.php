<?php

function somaElementos($array)
{
    // Inicializa uma variável para armazenar a soma dos elementos
    $soma = 0;

    // Percorre o array e soma cada elemento à variável $soma
    foreach ($array as $elemento) {
        $soma += $elemento;
    }

    // Retorna o resultado da soma
    return $soma;
}

// Exemplo de uso da função:
$meuArray = [1, 2, 3, 4, 5];
$resultado = somaElementos($meuArray);
echo "A soma dos elementos do array é: " . $resultado;