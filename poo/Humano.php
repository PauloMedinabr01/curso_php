<?php

namespace poo;
// Define um namespace chamado "poo".

class Humano // Define a classe "Humano".
{
    public const OLHOS = 2; // Declara uma constante pública chamada "OLHOS" com valor 2.
    public const BRACOS = 2; // Declara uma constante pública chamada "BRAÇOS" com valor 2.
    public const PERNAS = 2; // Declara uma constante pública chamada "PERNAS" com valor 2.

    public function mostrarConstante(): void // Declara um método público chamado "mostrarConstante".
    {
        echo self::BRACOS . "<br><br>"; // Imprime o valor da constante "BRAÇOS" quando chamadas em métodos.
    }
}

$humano = new Humano(); // Cria uma instância da classe "Humano" chamada "$humano".

echo $humano::OLHOS . "<br><br>"; // Imprime o valor da constante "OLHOS" usando notação de acesso estático.

echo $humano::OLHOS . $humano::PERNAS . "<br><br>"; // Imprime o valor da constante "OLHOS" usando notação de acesso estático.

$humano->mostrarConstante(); // Chama o método "mostrarConstante" na instância "$humano" que imprime o valor da constante "BRAÇOS".
