<?php

$str1 = "Está é uma string muito longa.";
$str2 = "Uma string curta.";

echo "Está string tem " . strlen($str1) . " caracteres. <br><br>";

echo "Está string tem " . strlen($str2) . " caracteres. <br><br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if ($len1 > $len2) {
    echo "A string 1 é maior que a string 2. <br><br>";
} else {
    echo "A string 2 é maior que a string 1. <br><br>";
}