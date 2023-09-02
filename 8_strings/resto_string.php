<?php

$str = "Testando o resto da string, pra ver se dá certo";

$resto = strstr($str, "resto"); // o resto da string após informar a string inicial.

echo "$resto <br><br>";

$s = "string";

$resto2 = strstr($str, $s);

echo "$resto2 <br><br>";

if (strstr($str, ".net") === false) {
    echo "Não encontramos a string <br><br>";
}