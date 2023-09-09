<?php

// resgatar elementos do array
// remover elementos

$arr = [1, 2, 3, 4, 5, 6];
print_r($arr);
echo "<br><br>";

$removidos = array_splice($arr, 1, 2);

print_r($arr);
echo "<br><br>";

print_r($removidos);
echo "<br><br>";

$arr2 = [1, 2, 3, 4, 5, 6, 8, 9, 10];
print_r($arr2);
echo "<br><br>";

$removidos = array_splice($arr2, 4);

print_r($arr2);
echo "<br><br>";

print_r($removidos);
echo "<br><br>";
