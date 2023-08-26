<?php

$x = 1;

switch ($x) {
    case 0:
        echo "X é igual a 0 <br><br>";
        break;
    case 1:
        echo "X é igual a 1 <br><br>";
        break;
    default:
        echo "X não é igual a nenhum número <br><br>";
}

$b = 2;

switch ($b) {
    case 0:
        echo "B é igual a 0 <br><br>";
        break;
    case 1:
        echo "B é igual a 1 <br><br>";
        break;
    default:
        echo "B não é igual a nenhum número <br><br>";
}

$c = 2;

echo match ($c) {
    0 => "C é igual a 0 <br><br>",
    1 => "C é igual a 1 <br><br>",
    default => "C não é igual a nenhum número <br><br>",
};