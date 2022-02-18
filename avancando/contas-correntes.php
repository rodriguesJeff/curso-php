<?php

$conta1 = [
    'titular' => 'Jefferson',
    'saldo' => 2000, 
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10.000,
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300,
];

$contas = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas); $i ++) {
    echo "Conta do " . $contas[$i]['titular'] . "\n";
    echo "Saldo: R\$ " . $contas[$i]['saldo'] . "\n";
    echo "\n";
}