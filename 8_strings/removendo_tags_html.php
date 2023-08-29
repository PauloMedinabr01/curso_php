<?php

$textoHtml = "<p>Testando paragráfo em html.</p> <div>Uma div.</div> <p>Outro paragráfo.</p>";

echo $textoHtml;

$salvarTexto = strip_tags($textoHtml);
echo $salvarTexto;