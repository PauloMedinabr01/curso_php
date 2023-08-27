<?php

$array = ["Teste", "Balão", "Olá", "Janela", "Planta"];

// função para imprimir o array
print_r($array);

echo "<br><br>";

// junta um array em string unica, o separador é uma virgula definido nos parametros
$teste = implode(", ", $array);

echo $teste . "<br><br>";

// criar uma função com 3 variáveis númericas e exibir a multiplicação com um echo
function multiplicar(): void
{
    $a = 3;
    $b = 2;
    $c = 4;

    echo $a * $b * $c . "<br><br>";
}

multiplicar();

function concatenar()
{
    $nome = "Paulo";
    $sobrenome = "Coelho";

    echo "Nome: " . $nome . " " . $sobrenome . "<br><br>";
}

concatenar();

