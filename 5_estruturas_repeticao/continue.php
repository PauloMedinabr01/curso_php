<?php

$a = 10;

while ($a > 0) {

    if ($a == 5 || $a == 7) {

        echo "Pulou a execução do $a <br><br>";

        $a--;

        continue;
    }

    if ($a == 2) {
        echo "Terminando o loop <br><br>";
        break;

    }

    echo "Valor de a: $a <br><br>";

    $a--;
}
