<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);
echo "$cor <br><br>";
echo "$forma <br><br>";
echo "$material <br><br>";

$pessoa = [
    'nome' => 'Paulo',
    'idade' => 41,
    'profissao' => 'programador'
];

extract($pessoa);
echo "$nome <br><br>";
echo "$idade <br><br>";
echo "$profissao <br><br>";
