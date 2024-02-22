<?php
require 'Client.php';

$client = new Client('574.852.830-49');
$client->fullname = 'Mariah Tatiane Viana';
$client->phone = '(51) 99377-4944';
$client->status = true;

echo 'Nome: ' . $client->fullname . "\n";
echo 'CPF: ' . $client->cpf . "\n";
echo 'Telefone: ' . $client->phone . "\n";

echo "\n";

$client->cpf = 'Qualquer besteira';

echo $client;