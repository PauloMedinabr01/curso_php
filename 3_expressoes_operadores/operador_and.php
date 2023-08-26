<?php

if (5 > 2 && 10 < 100) { //true
    echo "True <br><br>";
} else {
    echo "False <br><br>";
}

if (5 > 2 && 1000 < 100) { //fase
    echo "True <br><br>";
} else {
    echo "False <br><br>";
}

$a = 5;
$b = 12;
$c = 100;

if ($a < $b && 10 < 100) {
    echo "True <br><br>";
} else {
    echo "False <br><br>";
}

if ($a < $b && 'a' === 'a') {
    echo "True <br><br>";
} else {
    echo "False <br><br>";
}
