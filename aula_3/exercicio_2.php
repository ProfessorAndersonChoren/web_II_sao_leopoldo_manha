<?php
function contarPalavras(string $frase, string $separador = ' '):int
{
    $palavras = explode($separador,$frase);
    return count($palavras);
}

$entrada = readline('Digite seu frase favorita, e te direi quantas palavras a compõem: ');
$qtdDePalavras = contarPalavras($entrada);
echo "A frase \"$entrada\" contém $qtdDePalavras palavras!";