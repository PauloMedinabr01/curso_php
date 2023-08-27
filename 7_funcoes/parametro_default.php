<?php

// Definindo a função 'teste' com um parâmetro opcional ($a) e um valor padrão "teste".
// Isso significa que se nenhum valor for passado para $a ao chamar a função, ele assumirá o valor "teste".
function teste($a = "Teste"): void
{
    // Exibindo uma mensagem com o valor de $a.
    echo "O valor de A é: $a <br><br>";
}

// Chamando a função 'teste' sem fornecer um valor para o parâmetro $a.
// Nesse caso, o valor padrão "teste" será usado.
teste();

// Chamando a função 'teste' com o valor "asd" como argumento para o parâmetro $a.
// Isso substituirá o valor padrão "teste" definido na função.
teste("ads");

// parâmetro default deve ser informado após o parametro obrigatório
function teste2($b, $a = "Teste"): void
{
    echo "O valor de a é : $a, o valor de B é: $b <br><br>";
}

echo "************************ <br><br>";

teste2(4, "Testando");
