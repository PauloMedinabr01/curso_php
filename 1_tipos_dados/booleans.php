<?php

echo "True imprime " . true . "<br>";
echo '<br>';

echo "False imprime 0 ou não exibe nada" . false . "<br>";
echo '<br>';

if (true) { //true
    echo 'Verdadeiro <br>';
}

echo '<br>';

if (5 > 2) { // true
    echo 'Verdadeiro <br>';
}
echo '<br>';

$a = true;
if (is_bool($a)) {
    echo 'É um booleano <br>';
}

echo '<br>';

$b = false;
if (is_bool($a)) {
    echo 'É um booleano <br>';
}
