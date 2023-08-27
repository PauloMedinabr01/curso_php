<?php

function contaVogais($string): string
{
// Converter a string para minúsculas para considerar vogais maiúsculas e minúsculas.
    $string = strtolower($string);

// Inicializar um contador de vogais.
    $contaVogais = 0;

// Array contendo as vogais.
    $vogais = ['a', 'e', 'i', 'o', 'u'];

// Percorrer cada caractere da string.
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
// Verificar se o caractere atual é uma vogal.
        if (in_array($char, $vogais)) {
            $contaVogais++;
        }
    }

// Retornar a contagem de vogais.
    return $contaVogais;
}

// Testando a função
$fraseTeste = "Olá, como vai você?";
$resultado = contaVogais($fraseTeste);
echo "A frase '{$fraseTeste}' possui {$resultado} vogais.";
