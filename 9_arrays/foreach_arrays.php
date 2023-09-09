<?php

$array = [
    'Nome' => 'Paulo',
    'Idade' => '41',
    'Profissão' => 'Programador'
];

foreach ($array as $key => $value) {
    echo "$key => $value <br>";
}
echo "<br><br>";

$array2 = [1, 2, 3, 4, 5, 6];

foreach ($array2 as $key) {
    echo "Item do array: $key<br>";
}
