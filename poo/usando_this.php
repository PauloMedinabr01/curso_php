<?php

class Animal
{
    public string $nome;

    public function escolherNome($nome): void
    {
        $this->nome = $nome;
    }

    public function latir(): string
    {
        return "Latindo...";
    }
}

$animal = new Animal();

$animal->escolherNome('Bidu');

echo "O nome do cachorro é: $animal->nome. <br><br>";

echo $animal->latir();
