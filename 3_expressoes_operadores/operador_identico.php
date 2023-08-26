<?php

if (1 === 1) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if (1 == "1") {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if ('1' === 1) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if (true === true) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if (false === true) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

$a = 1;
$b = 1;
$c = 3;
$d = 'Nome';

if ($a === $b) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if ($a === $c) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}

if ($d === $c) {
    echo "São idênticos <br><br>";
} else {
    echo "Não são idênticos <br><br>";
}
