<?php

// Definindo a função somaNumerosPares que recebe um número inteiro como parâmetro e retorna um valor inteiro.
function somaNumerosPares($number): int
{
    // Verifica se o número fornecido é menor ou igual a 0.
    if ($number <= 0) {
        return 0; // Retorna 0 se o número não for positivo.
    }

    // Inicializa a variável de acumulação para a soma dos números pares.
    $sum = 0;

    // Loop que percorre os números de 1 até o número fornecido.
    for ($i = 1; $i <= $number; $i++) {
        // Verifica se o número atual ($i) é par.
        if ($i % 2 === 0) {
            // Se for par, adiciona-o à variável de acumulação ($sum).
            $sum += $i;
        }
    }

    // Retorna o valor final da soma dos números pares.
    return $sum;
}

// Testando a função com o número 10.
$numeroTeste = 10;
$resultado = somaNumerosPares($numeroTeste);

// Exibe a mensagem com o resultado da função.
echo "A soma dos números pares até {$numeroTeste} é: {$resultado}";
