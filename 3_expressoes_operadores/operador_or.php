<?php


if (5 > 2 || 3 < 4) { //true e true
    echo "Verdadeiro <br><br>";
}

if (5 > 2 || 30 < 4) { //true e false
    echo "Verdadeiro <br><br>";
}

if (5 > 20 || 3 < 4) { //true e false
    echo "Verdadeiro <br><br>";
}

if (5 > 20 || 30 < 4) { //false e false
    echo "Verdadeiro <br><br>";
} else {
    echo "Falso <br><br>";
}
