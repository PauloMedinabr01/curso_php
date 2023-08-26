<?php

$idade = 19;
$idade1 = 16;
$idade2 = 23;
$nome = 'João';

$maioridade = 18;

if ($idade >= $maioridade) {
    echo "IF 1 Maior de idade <br><br>";
} else {
    echo "ELSE 1 menor de idade <br><br>";
}

if ($idade1 >= $maioridade) {
    echo "IF 2 Maior de idade <br><br>";
} else {
    echo "ELSE 2 menor de idade <br><br>";
}

if ($idade2 >= $maioridade) {
    echo "IF 3 Maior de idade <br><br>";
} else {
    echo "ELSE 3 menor de idade <br><br>";
}

if ($idade >= $maioridade && $nome === 'João') {
    echo "IF 4 Maior de idade <br><br>";
} else {
    echo "ELSE 4 menor de idade <br><br>";
}