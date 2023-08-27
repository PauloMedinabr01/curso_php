<?php

// usar echo somente para depuração de funções
function soma($n1, $n2)
{
    return $n1 + $n2;
}

$n1 = 10;
$n2 = 5;
$result = soma($n1, $n2);
echo "A soma de {$n1} e {$n2} é: {$result}";
