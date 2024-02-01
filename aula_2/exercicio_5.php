<?php
$weight = readline('Digite seu peso em kilo: ');
$height = readline('Digite sua altura em metros: ');

$imc = $weight / ($height * $height);

if($imc < 18.5){
    echo 'Abaixo do peso';
}else if($imc <= 24.9){
    echo 'Peso normal';
}else if($imc <= 29.9){
    echo 'Sobrepeso';
}else{
    echo 'Obeso';
}