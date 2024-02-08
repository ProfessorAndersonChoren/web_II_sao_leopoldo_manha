<?php
function realizarOperacao(float $numero1, float $numero2, int $operacao) : float
{
    if($operacao < 1 || $operacao > 4){
        throw new InvalidArgumentException('Operação inválido!!!');
    }

    switch ($operacao) {
        case 1:
            return $numero1 + $numero2;
        case 2:
            return $numero1 - $numero2;
        case 3:
            return $numero1 * $numero2;
        case 4:
            return $numero1 / $numero2;
        default:
            return 0;
    }
}

$primeiroNumero = readline('Digite o primeiro número: ');
$segundoNumero = readline('Digite o segundo número: ');

echo "1 - Somar\n";
echo "2 - Subtrair\n";
echo "3 - Multiplicar\n";
echo "4 - Dividir\n";
$opcao = readline('Escolha a operação matemática: ');

try{
    echo realizarOperacao($primeiroNumero, $segundoNumero, $opcao);
}catch(InvalidArgumentException $iva){
    echo "\nParâmetro inválido: ".$iva->getMessage();
}catch(Throwable $ex){
    echo "\nHouve um erro inesperado: " . $ex->getMessage();
}