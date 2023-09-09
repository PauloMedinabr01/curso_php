<?php

// Criando um array de números
$arr = [1, 2, 3, 4, 5];

// Usando a função array_reverse para inverter a ordem dos elementos do array
$arrRev = array_reverse($arr);

// Imprimindo o array original
print_r($arr);
echo "<br><br>";

// Imprimindo o array invertido
print_r($arrRev);
echo "<br><br>";

// Criando um array associativo com nomes como chaves e idades como valores
$arr2 = [
    'Paulo' => 41,
    'Maria' => 30,
    'Luis' => 50,
];

// Usando a função array_reverse para inverter a ordem dos elementos do array associativo
$arrRev2 = array_reverse($arr2);

// Imprimindo o array associativo original
print_r($arr2);
echo "<br><br>";

// Imprimindo o array associativo invertido
print_r($arrRev2);
echo "<br><br>";
