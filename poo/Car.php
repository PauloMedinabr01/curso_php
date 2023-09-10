<?php

class Car
{

    public int $rodas = 4;
    protected int $portas = 4;
    private string $vidro = "Sem película";

    public function getVidro(): string
    {
        return $this->vidro;
    }

    public function getPortas(): int
    {
        return $this->portas;
    }

}

class Mecanico
{

    public function alterarRodas($carro): void
    {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula): void
    {
        $carro->vidro = $pelicula;
    }

}

$carro = new Car;

echo $carro->rodas . "<br>";

$mecanico = new Mecanico;

$mecanico->alterarRodas($carro);

echo $carro->rodas . "<br>";

// $mecanico->colocarPelicula($carro, "G20");

echo $carro->getVidro() . "<br>";

// $carro->vidro = "teste";

echo $carro->getPortas() . "<br>";