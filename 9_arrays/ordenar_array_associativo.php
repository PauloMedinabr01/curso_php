<?php

// Criando um array associativo com nomes como chaves e idades como valores
$arr = [
    'Paulo' => 30,
    'Maria' => 41,
    'Joaquim' => 50,
    'Ana' => 18,
];

// Ordenando o array em ordem crescente com base nos valores (idades)
asort($arr);

// Imprimindo o array após a ordenação
print_r($arr);
echo "<br><br>";

// Ordenando o array em ordem decrescente com base nos valores (idades)
arsort($arr);

// Imprimindo o array após a ordenação
print_r($arr);
echo "<br><br>";

// Ordenando o array em ordem crescente com base nas chaves (nomes)
ksort($arr);

// Imprimindo o array após a ordenação
print_r($arr);
echo "<br><br>";

// Ordenando o array em ordem decrescente com base nas chaves (nomes)
krsort($arr);

// Imprimindo o array após a ordenação
print_r($arr);
echo "<br><br>";

