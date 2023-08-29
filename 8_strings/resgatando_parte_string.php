<?php

$string = "Está é a minha string";

//string pai, índice inicial, comprimento da palavra, pega tudo se omitir o comprimento da string
//comprimento negativo remove as strings do fim para o início
$minha = substr($string, 10, 6);


echo $string . "<br><br>";

echo $minha . "<br><br>";
