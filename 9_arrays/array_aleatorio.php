<?php

// Criando um array de números de 1 a 9
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Embaralhando os elementos do array usando a função shuffle
shuffle($arr);

// Imprimindo o array após embaralhar
print_r($arr);
echo "<br><br>";

// Criando um novo array de números de 1 a 9 (o mesmo array original)
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Embaralhando novamente os elementos do array usando a função shuffle
shuffle($arr);

// Imprimindo o array após o segundo embaralhamento
print_r($arr);
echo "<br><br>";
