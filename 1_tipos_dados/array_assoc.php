<?php

$arr = ['Nome' => 'Paulo', 'Estuda' => 'PHP', 'Joga' => 'XBOX', 'Carro' => 'GM'];

print_r($arr);

echo '<br><br>';

print_r($arr['Joga']);

echo '<br><br>';

$arr = ['Nome' => 'Paulo', 'Idade' => 41, 'Verdadeiro' => true];

print_r($arr);

echo '<br><br>';

if (is_array($arr)) {
    echo '$arr é um array associativo.';
}

echo '<br><br>';

$arr = [
    'Nome' => 'Paulo',
    'Idade' => 41,
    'Profissão' => 'programador'];

print_r($arr);

echo '<br><br>';

if ($arr["Idade"] >= 18) {
    echo $arr['Nome'] . ' tem ' . $arr['Idade'] . ' anos.';
}