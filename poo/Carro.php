<?php

namespace poo;
// Define um namespace chamado "poo" para a classe Carro

class Carro // Declaração da classe Carro
{
    public int $rodas = 4; // Declara uma propriedade pública chamada "$rodas" com um valor padrão de 4
    public int $aro = 20; // Declara uma propriedade pública chamada "$aro" com um valor padrão de 20
    public string $cor = "Vermelha"; // Declara uma propriedade pública chamada "$cor" com um valor padrão de "Vermelha"

    function ligar(): void
    {
        echo "Ligou o carro <br>";
    }
}

$ferrari = new Carro(); // Cria uma nova instância da classe Carro chamada $ferrari

echo $ferrari->rodas . "<br><br>"; // Imprime o valor da propriedade "$rodas" da instância $ferrari
echo $ferrari->aro . "<br><br>"; // Imprime o valor da propriedade "$aro" da instância $ferrari
echo $ferrari->cor . "<br><br>"; // Imprime o valor da propriedade "$cor" da instância $ferrari

$ferrari->cor = "Azul"; // Modifica o valor da propriedade "$cor" da instância $ferrari para "Azul"
echo $ferrari->cor . "<br><br>"; // Imprime o novo valor da propriedade "$cor" da instância $ferrari (agora "Azul")

$ferrari->ligar(); // Imprime o valor da função ligar da classe Carro
