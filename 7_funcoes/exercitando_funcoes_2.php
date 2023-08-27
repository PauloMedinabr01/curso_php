<?php

function numeroAoQuadrado($numero): float|int
{
    return $numero * $numero;
}

// Testando a função
$numeroTeste = 5;
$resultado = numeroAoQuadrado($numeroTeste);
echo "O quadrado de {$numeroTeste} é: {$resultado}";

/*
 *      Início
       |
      V
+------------------+
| Recebe o número  |
| como entrada     |
| (parâmetro)      |
+------------------+
       |
       V
+------------------+
| Calcula o        |
| quadrado do      |
| número (n * n)   |
+------------------+
       |
       V
+------------------+
| Retorna o        |
| resultado do     |
| cálculo do       |
| quadrado         |
+------------------+
       |
      V
     Fim

 */
