<?php

$a = 1;
$b = "1";

if ($a != $b) {
    echo "a diferente b <br><br>";
} else {
    echo "a igual de b <br><br>";
}

if ($a !== $b) {
    echo "São diferentes <br><br>";
} else {
    echo "Não são diferentes <br><br>";
}

if (1 !== 2) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if ([] !== 2) {
    echo "Não são idênticos <br><br>";
} else {
    echo "São idênticos <br><br>";
}

