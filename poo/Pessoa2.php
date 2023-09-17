<?php

class Pessoa2
{
    public string $nome;
    public string $idade;

    function andar($m): string
    {
        return "A pessoa andou $m metros <br>";
    }
}

$pessoa = new Pessoa2;

$pessoa->nome = "Paulo";
$pessoa->idade = 41;

echo $pessoa->nome . '<br>';
echo $pessoa->idade . '<br>';;

echo $pessoa->andar(6);