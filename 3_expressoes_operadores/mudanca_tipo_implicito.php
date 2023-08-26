<?php

$a = 5 / 2; // disisão de dois inteiros gera um resultado de número float.

echo $a;
echo "<br><br>";

if (is_float(5 / 2)) {
    echo " É float. <br><br>";
}

echo 2 . 3;
echo "<br><br>";

if (is_string(2 . 3)) {
    echo " É string. <br><br>";
}

$nome = "Paulo";
$sobrenome = "Coelho";
$nomeCompleto = $nome . " " . $sobrenome;

echo "$nomeCompleto <br><br>";

if (is_string($nomeCompleto)) {
    echo "É string";
}


