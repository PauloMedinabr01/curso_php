<?php

namespace poo;

class Animal
{
    public $nome;

    function escolherNome($nome): void
    {
        $this->nome = $nome;
    }

    function latirForte(): string
    {
        return strtoupper($this->latir());
    }

    function latir(): string
    {
        return "Latindo... <br><br>";
    }
}

$frida = new Animal();

echo "O nome do animal é: $frida->nome <br><br>";

$frida->escolherNome("frida");

echo "O nome do animal é: $frida->nome <br><br>";

echo $frida->latir();

echo $frida->latirForte();
