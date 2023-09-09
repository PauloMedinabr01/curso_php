<?php

$pessoa = ['Paulo', 29, 'Programador', 'M'];

print_r($pessoa);
echo "<br><br>";

list($nome, $idade, $profissao, $genero) = $pessoa;

echo "$nome <br><br>";
echo "$idade <br><br>";
echo "$profissao <br><br>";
echo "$genero <br><br>";
