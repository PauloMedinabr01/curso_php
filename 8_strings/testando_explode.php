<?php

$teste = "carro-dia-motor-teste-banana";

$testeExplode = explode("-", $teste);

print_r($testeExplode);
echo "<br><br>";

for ($i = 0; $i < count($testeExplode); $i++) {
    echo "$testeExplode[$i]" . "<br><br>";
}