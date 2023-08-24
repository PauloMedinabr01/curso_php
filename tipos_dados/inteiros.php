<?php

// números inteiros
echo 5;
echo '<br>';
echo 5 + 7;
echo '<br>';

if (is_int(5)) {
    echo "É um inteiro. <br>";
}

if (is_int("Não é um inteiro")) {
    echo "É um inteiro. <br>";
}

$a = 10;

if (is_int($a)) {
    echo "É um inteiro. <br>";
}
