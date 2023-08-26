<?php

function teste(): void
{
    $a = 0;
    $a++;

    echo "Teste valor da variável a: $a <br><br>";
}

teste();
teste();
teste();

function testeStatic(): void
{
    static $a = 0; // mantem o escopo e o valor vai ser mantido entre chamadas de função
    $a++;

    echo "Teste valor da variável static a: $a <br><br>";
}

testeStatic();
testeStatic();
testeStatic();