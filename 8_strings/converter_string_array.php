<?php

$string = "www.teste.com.br";

$stringToArray = explode(".", $string); // define o separador, informar a variável

print_r($stringToArray); //print_r imprime o array
echo "<br><br>";

$stringToArray2 = explode(",", $string); // define o separador, informar a variável

print_r($stringToArray2); //print_r imprime um item uníco por não encontrar o separador definido
echo "<br><br>";

for ($i = 0; $i < count($stringToArray); $i++) {
    echo "$stringToArray[$i] . <br><br>";

}
