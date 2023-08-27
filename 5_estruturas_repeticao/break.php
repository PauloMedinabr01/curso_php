<?php

$x = 0;

while ($x < 50) {

    echo "Valor de x: $x <br><br>";

    if ($x === 15) { // break interrompe o loop quando valor de x for = 7
        echo "Terminando o loop <br><br>";
        break;
    }
    $x++;
}

