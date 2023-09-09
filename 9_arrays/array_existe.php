<?php

$arr = [
    'nome' => 'Paulo',
    'idade' => 41
];

if (array_key_exists("nome", $arr)) {
    echo "A chave existe! <br><br>";
} else {
    echo "A chave não existe! <br><br>";
}

if (array_key_exists("profissão", $arr)) {
    echo "A chave existe! <br><br>";
} else {
    echo "A chave não existe! <br><br>";
}

if (isset($arr['nome'])) {
    echo "A chave existe! <br><br>";
} else {
    echo "A chave não existe! <br><br>";
}

if (isset($arr['teste'])) {
    echo "A chave existe! <br><br>";
} else {
    echo "A chave não existe! <br><br>";
}

if (isset($x)) {
    echo "A chave existe! <br><br>";
} else {
    echo "A chave não existe! <br><br>";
}
