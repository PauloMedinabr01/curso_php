<?php

namespace poo;

class Pessoa
{
    function falar(): void
    {
        echo "Método falar da classe pessoa. <br><br>";
    }

    function somar($x, $y): void
    {
        echo "Método somar da classe Pessoa. A soma de x e y é: " . $x + $y . "<br><br>";
    }
}

$pessoa = new Pessoa();
$pessoa->falar();

$joao = new Pessoa();
$joao->falar();

$funcionario = new Pessoa();
$funcionario->falar();

$pessoa->somar(2, 6);
