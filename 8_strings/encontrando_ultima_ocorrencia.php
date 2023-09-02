<?php

$str = "Encontrando a última ocorrência de uma string que tem a palavra string repetida";

$palavra = strrpos($str, "string");

echo "$palavra <br><br>";

if (strrpos($str, "Java") === false) {
    echo "A palavra Java não foi encontrada. <br><br>";
}

$p = substr($str, strrpos($str, "uma"), 3);

echo "$p <br><br>";

