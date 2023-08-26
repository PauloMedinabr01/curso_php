<?php

$x = 10; // variável global

function teste(): void
{
    $x = 5; // variável local
    echo "Variável local da função teste x= $x <br><br>";
}

echo "Variável global x= $x <br><br>"; // chamada da função variável global

teste(); // chamada da função variável local

function testando()
{
    $x = 12;// variável local
    echo "Variável local da função testando x= $x <br>";
}

echo "Variável global x= $x <br><br>"; // chamada da função variável global

testando(); // chamada da função variável local
