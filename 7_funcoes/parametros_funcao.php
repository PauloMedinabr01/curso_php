<?php

// função somar recebe dois parametros, $soma recebe $num1 + $num2, echo exibe o valor da soma
function somar($num1, $num2): void
{
    $soma = $num1 + $num2;

    echo "Resultado da soma de dois parâmetros informados pelo usuário: " . $soma . "<br><br>";
}

somar(10, 15);

echo "************************* <br><br>";

function exibeString($nome1, $nome2): void
{
    $resultado = $nome1 . $nome2;

    echo "Resultado da concatenação de dois parâmetros informados pelo usuário - nome: " . $resultado . "<br><br>";
}

exibeString('Paulo ', 'Coelho');

echo "************************* <br><br>";

function velocidade($velocidade): void
{
    echo "A velocidade máxima do carro é de $velocidade <br><br>";
}

velocidade(100);
velocidade(200);

echo "************************* <br><br>";

// erro de execução por não informar um paramêtro
//velocidade();

// php ignora parâmetro desnecessário
velocidade(150, "15");

echo "************************* <br><br>";

// checando se o parâmetro correto foi informado
function checarParametro($velocidade): void
{
    if (is_int($velocidade)) {
        echo "A velocidade máxima do carro é de $velocidade <br><br>";
    } else {
        echo "Por favor, informe um número inteiro <br><br>";
    }
}

// paramêtro incorreto informado na função
checarParametro("a");



