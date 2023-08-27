<?php

$lista = ["Arroz", "Feijão", "Farinha", "Leite"];

function listaString($arr): string
{
    $str = "Você levou estes itens: ";

    $totalItems = count($arr); // Calcula o total de itens da lista

    for ($i = 0; $i < $totalItems; $i++) {
        $str .= $arr[$i]; // Adiciona o item atual à string

        if ($i < $totalItems - 1) {
            $str .= ", "; // Adiciona uma vírgula e espaço se não for o último item
        } else {
            $str .= "."; // Adiciona um ponto final se for o último item
        }
    }

    return $str;
}

echo listaString($lista);
