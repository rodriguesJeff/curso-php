<?php

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

$contas[44444444444] = [
    'titular' => 'Emilly',
    'saldo' => 50000,
];

foreach ($contas as $cpf => $conta) {
    echo "Conta do " . $conta['titular'] . "\n";
    echo "Saldo: R\$ " . $conta['saldo'] . "\n";
    echo "CPF do cliente: " . $cpf . "\n";
    echo "\n";
} 