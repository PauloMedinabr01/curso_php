<?php

echo 'Isso é um texto com aspas simples.'; //imprime somente texto

echo '<br>';

echo "Isso é um texto com aspas duplas."; //imprime texto e variáveis

echo '<br>';

$numero = 1250;
echo "Texto com aspas duplas e impressão da variável número = $numero ."; //imprime texto e variáveis

echo '<br>';

if (is_string("Paulo")) {
    echo "É uma string. <br>";
}

if (is_string(2)) {
    echo "É uma string. <br>";
}

$nome = "Paulo";

if (is_string($nome)) {
    echo "É uma string. <br>";
}