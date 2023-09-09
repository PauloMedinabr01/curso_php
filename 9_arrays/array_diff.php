<?php

// Definindo o primeiro array
$arr = [1, 2, 3];

// Definindo o segundo array
$arr2 = [2, 4, 6];

// Usando a função array_diff para encontrar os elementos que estão em $arr, mas não em $arr2
$diff = array_diff($arr, $arr2);

// Imprimindo o resultado, que será um array contendo os elementos que estão em $arr, mas não em $arr2
print_r($diff);
