<?php

function maiorElemento($array)
{
    // Inicializa uma variável para armazenar o maior elemento, considerando o primeiro elemento como o maior inicialmente
    $maior = $array[0];

    // Percorre o array para encontrar o maior elemento
    foreach ($array as $elemento) {
        if ($elemento > $maior) {
            // Se o elemento atual for maior que o atual "maior", atualiza a variável "maior"
            $maior = $elemento;
        }
    }

    // Retorna o maior elemento encontrado
    return $maior;
}

// Exemplo de uso da função:
$meuArray = [10, 5, 36, 71, 29];
$resultado = maiorElemento($meuArray);
echo "O maior elemento do array é: " . $resultado;
