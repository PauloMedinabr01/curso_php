<?php

$arr = ['Banana', 'Maça', 'Batata', 'Laranja', 'Mamão'];

if (in_array("Batata", $arr)) {
    echo "Há o item " . $arr[2] . " no array <br><br>";
} else {
    echo "Não há o item batata no array <br><br>";
}

if (in_array("Uva", $arr)) {
    echo "Há o item Uva no array <br><br>";
} else {
    echo "Não há o item Uva no array <br><br>";
}
