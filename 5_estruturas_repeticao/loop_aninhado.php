<?php

$x = 0;

while ($x < 10) {

    echo "Loop externo X: $x <br><br>";

    $j = 1;

    while ($j <= 3) {
        echo "Loop interno J: $j <br><br>";

        $j++;
    }

    $x++;
}

echo "Outro loop <br><br>";
