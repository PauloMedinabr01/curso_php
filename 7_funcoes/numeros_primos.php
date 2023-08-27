<?php

// Definição da função isPrime com um parâmetro $number e tipo de retorno bool
function isPrime($number): bool
{
    // Verifica se o número é menor que 2; se for, retorna false
    if ($number < 2) {
        return false;
    }

    // Inicia um loop que vai de $i = 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Verifica se o número é divisível por $i (não é primo) e retorna false se for
        if ($number % $i == 0) {
            return false;
        }
    }

    // Se o loop não encontrou divisores, retorna true (o número é primo)
    return true;
}

echo isPrime(5);   // true
echo isPrime(10);  // false
echo isPrime(17);  // true
echo isPrime(1);   // false
