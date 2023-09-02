<?php

$array = [
    "Banana",
    "Maça",
    "Batata",
    "Limão"
];

$string = implode(", ", $array); //converte array para string informando o separador

echo "$string <br><br>";

$array2 = [
    "Banana",
    "Maça",
    "Batata",
    "Limão"
];

$string2 = implode(" - ", $array2);

echo "$string2 <br><br>";
