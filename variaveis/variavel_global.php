<?php

$teste = "asd";

echo "Teste global 1 $teste <br><br>";

if (5 > 2) {
    $teste = "dsa";
    echo "Teste if $teste <br><br>";
}

echo "Teste global 2 $teste <br><br>";

function funcao(): void
{
    $teste = "xsf";
    echo "Teste local $teste <br><br>";
}

funcao();

function testandoGlobal(): void
{
    global $teste;
    echo "Teste global função $teste <br><br>";
}

testandoGlobal();

