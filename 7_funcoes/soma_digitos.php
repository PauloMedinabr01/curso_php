<?php

function sumDigits($number): int
{
    // Converte o número para uma string para poder acessar os dígitos individualmente
    $numStr = (string)$number;
    $sum = 0;

    // Percorre cada dígito na string e adiciona ao valor da soma
    for ($i = 0; $i < strlen($numStr); $i++) {
        $sum += (int)$numStr[$i]; // Converte o dígito de volta para inteiro antes de somar
    }

    return $sum;
}

echo sumDigits(123);   // 6 (1 + 2 + 3)
echo sumDigits(4567);  // 22 (4 + 5 + 6 + 7)
echo sumDigits(98765); // 35 (9 + 8 + 7 + 6 + 5)
