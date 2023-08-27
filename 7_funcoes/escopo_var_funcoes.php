<?php

$a = 10;

// var escopo global
$b = 15;

function testeEscopo(): void
{
    $a = 5;
    global $b;
    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "Escopo LOCAL de a: $a <br><br>";

    echo "Var de escopo GLOBAL dentro da função b: $b <br><br>";

    echo "Escopo STATIC de c: $c <br><br>";

}

echo "Escopo GLOBAL de a: $a <br><br>";
echo "Escopo GLOBAL de b: $b <br><br>";

testeEscopo();

echo "Escopo GLOBAL de b 2: $b <br><br>";

testeEscopo();