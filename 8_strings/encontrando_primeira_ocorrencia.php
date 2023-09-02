<?php

$str = "Testando a verificação de primeira ocorrência com strpos";

$encontrar = strpos($str, "strpos"); //encontra strings e trechos de string

echo "$encontrar <br><br>";

$encontrar2 = strpos($str, "java");

echo "$encontrar2 <br><br>";

if ($encontrar2 === false) {
    echo "String não existe. <br><br>";
}
