<?php

function alteraDados($nome, $idade): array
{
    $nomeAlterado = "Sr. $nome"; // Adiciona o prefixo "Sr." ao nome
    $idadeFormatada = "$idade anos."; // Formata a idade com "anos."
    return [$nomeAlterado, $idadeFormatada];
}

$dados = alteraDados("Paulo", 41);
print_r($dados);

echo "<br><br>";

// Utilizando os dados retornados da função para exibir uma saudação formatada.
echo "Olá {$dados[0]}, você tem {$dados[1]}";
// Observe que utilizei chaves ({}) para delimitar as variáveis dentro da string no echo,
// para garantir que a interpretação do PHP ocorra corretamente. Isso é especialmente importante quando você está trabalhando com índices de array dentro de 8_strings.
