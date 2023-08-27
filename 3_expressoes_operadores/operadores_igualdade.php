<?php

if (1 == 1) {
    echo "Comparação de números é verdadeira <br><br>";
} else {
    echo "Comparação é falsa <br><br>";
}

if (3 == 4) {
    echo "Comparação de números é verdadeira <br><br>";
} else {
    echo "Comparação de números é falsa <br><br>";
}

$a = 12;
$b = 12;
$c = 100;

if ($a == $b) {
    echo "Comparação de variáveis verdadeira <br><br>";
} else {
    echo "Comparação de variáveis é falsa <br><br>";
}

if ($a == $c) {
    echo "Comparação de variáveis é verdadeira <br><br>";
} else {
    echo "Comparação de variáveis é falsa <br><br>";
}

$nome = "Paulo";
$aluno = "Paulo";
if ($nome == $aluno) {
    echo "Comparação de 8_strings é verdadeira <br><br>";
} else {
    echo "Comparação de 8_strings é falsa <br><br>";
}

$nome = "Paulo";
$aluno = 10;
if ($nome == $aluno) {
    echo "Comparação de 8_strings é verdadeira <br><br>";
} else {
    echo "Comparação de 8_strings é falsa <br><br>";
}