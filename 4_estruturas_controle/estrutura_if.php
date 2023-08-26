<?php

// condição verdadeira
if (5 > 2) {
    echo "Entrou no IF 1 <br><br>";
}

// condição falsa
if (5 < 2) {
    echo "Entrou no IF 2 <br><br>";
}

// utilizando op. lógico
if (10 === 10 && 5 > 2) {
    echo "Entrou no IF 3 <br><br>";
}

$a = 10;
$b = 5;
$c = 'Entrou no IF 5';

// utilizando variáveis
if ($a > $b) {
    echo "Entrou no IF 4 <br><br>";
}

// utilizando variáveis
if ($a < $b) {
    echo "$c <br><br>";
}