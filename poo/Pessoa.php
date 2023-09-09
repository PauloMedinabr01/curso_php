<?php

namespace poo;

class Pessoa
{
    function falar(): void
    {
        echo "Método falar da classe pessoa.";
    }
}

$pessoa = new Pessoa();
$pessoa->falar();
