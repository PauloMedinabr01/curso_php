<?php

$arr = [1, 2, 3, 4, 5, 6];

function soma($a, $b)
{
    return $a + $b;
}

echo "Resultado da soma:" . soma(1, 3) . "<br><br>";

$resultado = array_reduce($arr, "soma");

echo "Resultado da soma do array com array_reduce: $resultado <br>";