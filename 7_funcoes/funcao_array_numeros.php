<?php

$arr = [];

for ($i = 0; $i < 16; $i++) {
    array_push($arr, $i);
}

//print_r($arr);

// função que retorna um array que recebe números maiores que 7
function arrayMaior7($array): array
{
    $arrayRetorno = [];
    for ($j = 0; $j < count($array); $j++) {
        if ($array[$j] > 7) {
            $arrayRetorno[] = $array[$j];
        }

    }
    return $arrayRetorno;
}

$novoArray = arrayMaior7($arr);
print_r($novoArray);