<?php

// números float

$a = 1.12;

echo $a . '<br>';

if (is_float(5.2)) {
    echo "É um float. <br>";
}

if (is_float("Não é um float")) {
    echo "É um float. <br>";
}

$a = 10.4;

if (is_float($a)) {
    echo "É um float. <br>";
}
