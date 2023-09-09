<?php

namespace poo;

class CarroNovo
{
    public string $cor;
    public string $tetoSolar;
    public int $velocidadeMaxima;

    function getVelocidadeMaxima(): void
    {
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h, a cor é $this->cor. <br><br>";
    }

    function setVelocidadeMaxima($vel): void
    {
        $this->velocidadeMaxima = $vel;
    }
}

$bmw = new CarroNovo();

$bmw->cor = "Branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

$ferrari = new CarroNovo();

$ferrari->cor = "Vermelha";
$ferrari->tetoSolar = true;

$ferrari->setVelocidadeMaxima(300);

$ferrari->getVelocidadeMaxima();