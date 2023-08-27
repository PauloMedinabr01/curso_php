<?php

// Definindo a função 'soma' que aceita dois parâmetros ($a e $b) e retorna um valor inteiro.
function soma($a, $b): int
{
    // Usando a função 'func_get_args()' para obter um array contendo todos os argumentos passados para a função.
    // Neste caso, irá imprimir o array contendo [2, 4].
    print_r(func_get_args());

    echo "<br>";

    // Usando a função 'func_num_args()' para obter o número de argumentos passados para a função.
    // Neste caso, irá imprimir o número 2, pois foram passados 2 argumentos ($a e $b).
    echo func_num_args() . "<br>";

    // Retorna a concatenação de $a e $b. Observe que o resultado não será uma adição numérica devido à concatenação de strings.
    return $a . $b;
}

// Chamando a função 'soma' com os argumentos 2 e 4.
// A função imprimirá o array de argumentos e o número de argumentos, e retornará o resultado da concatenação de 2 e 4.
soma(2, 4);
