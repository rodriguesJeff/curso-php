<?php 

// include 'funcoes.php';
// require 'funcoes.php';
require_once 'funcoes.php';

$contas = [
    11111111111 => [
        'titular' => 'Jefferson',
        'saldo' => 2000, 
    ], 
    22222222222 => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ], 
    33333333333 => [
        'titular' => 'Alberto',
        'saldo' => 300,
    ],
];

$contas[11111111111] = sacar($contas[11111111111], 500);
$contas[22222222222] = sacar($contas[22222222222], 50);

$contas[11111111111] = depositar(
    $contas[11111111111],
    7000
);

$contas[22222222222] = depositar(
    $contas[22222222222],
    40
);

titularComLetrasMaiusculas($contas[11111111111]);

foreach ($contas as $cpf => $conta) {
    echo "Conta do $conta[titular]\n";
    echo "Saldo: R\$ {$conta['saldo']}\n";
    echo "CPF do cliente: $cpf\n";
    echo "\n";
} 