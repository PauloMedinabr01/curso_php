<?php

class Pessoa
{
    function falar(): void
    {
        echo "Olá pessoal!";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Paulo';
echo $pessoa->nome;

echo '<br><br>';

$pessoa->falar();

