<?php
$numeros = [];

for($i=1;$i < 10;$i++){
    $entrada = readline('Digite um número: ');
    array_push($numeros,$entrada);
}

// TODO: Chamar as funções aqui
echo "A lista contêm " . contabilizarPares($numeros) . " números pares\n";
echo "A lista contêm " . contabilizarPositivos($numeros) . " números positivos\n";

function contabilizarPositivos(array $numeros):int
{
    $lista = array_filter($numeros,fn($numero) => $numero > 0);
    return count($lista);
}

function contabilizarPares(array $numeros):int
{
    $lista = array_filter($numeros, fn($numero) => $numero % 2 == 0);
    return count($lista);
}