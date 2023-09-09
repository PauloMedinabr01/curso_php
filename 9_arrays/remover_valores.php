<?php

$arr = ['banana', 'batata', 'maça', 'feijão', 'arroz'];

$removidos = array_splice($arr, 2, 2);

print_r($arr);
echo "<br><br>";

print_r($removidos);
echo "<br><br>";
