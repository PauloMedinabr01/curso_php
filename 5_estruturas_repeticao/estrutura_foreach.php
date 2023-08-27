<?php

echo "Usando o foreach com Array de números <br><br>";

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $numero) {
    echo "Elemento do array: $numero <br><br>";
}

echo "Usando o foreach com Array de nomes <br><br>";

$nomes = [
    "Alice",
    "Benjamin",
    "Clara",
    "Daniel",
    "Ella",
    "Felix",
    "Grace",
    "Henry",
    "Isabella",
    "Jack"
];

foreach ($nomes as $nome) {
    echo "Elemento do array - nome: $nome <br><br>";
}

echo "Usando o foreach com Array de nomes e números <br><br>";

$aluno = [
    "Alice" => "1",
    "Benjamin" => "2",
    "Clara" => "3",
    "Daniel" => "4",
    "Ella" => "5",
    "Felix" => "6",
    "Grace" => "7",
    "Henry" => "8",
    "Isabella" => "9",
    "Jack" => "10"
];

foreach ($aluno as $nome => $numero) {
    echo "Elemento do array - nome: $nome, número: $numero <br><br>";
}
