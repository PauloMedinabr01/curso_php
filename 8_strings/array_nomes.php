<?php

$arr = [
    'Porta' => 100,
    'Maçaneta' => 8,
    'Motor' => 2000,
    'Retrovisor' => 80
];

function itensCaros($arr): array
{

    $arrItensCaros = [];

    foreach ($arr as $item => $preco) {
        if ($preco > 50) {
            //array_push($arrItensCaros, $item);
            $arrItensCaros[] = $item;
        }
    }

    return $arrItensCaros;
}

$novoArr = itensCaros($arr);
print_r($novoArr);
