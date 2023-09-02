<?php

$url = "https://www.google.com";

$arrayURl = parse_url($url); //scheme // dominio

print_r($arrayURl);
echo "<br><br>";

echo $arrayURl["host"];
echo "<br><br>";

$url2 = "https://www.horadecodar.com.br/?busca=php";

$arrayURl2 = parse_url($url2);

print_r($arrayURl2);
echo "<br><br>";

$url3 = "https://www.horadecodar.com.br/usuarios/paulocoelho?id=12&nome=Paulo";

$arrayURl3 = parse_url($url3);

print_r($arrayURl3);
echo "<br><br>";