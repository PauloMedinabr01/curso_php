<?php

$x = 111;

$y =& $x; // recebe o mesmo valor de x

echo $x;
echo '<br>';
echo $y;
echo '<br>';

echo "Atribuição após a referência";
echo '<br>';

$y = 15;

echo $x;
echo '<br>';
echo $y;
echo '<br>';

$nome = 'Matheus';

$nome2 =& $nome;

echo $nome;
echo '<br>';
echo $nome2;
echo '<br>';

$nome = 20;

echo $nome;
echo '<br>';
echo $nome2;


