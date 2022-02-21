<?php 

function sacar($conta, $valor) {
    if ($valor > $conta['saldo']){
        exibeMensagem("Voce nao pode sacar");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta; // funcao devolve algum valor novo
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL; // sub rotina nao retorna nada
}

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
$contas[22222222222] = sacar($contas[22222222222], 300000);

foreach ($contas as $cpf => $conta) {
    echo "Conta do " . $conta['titular'] . "\n";
    echo "Saldo: R\$ " . $conta['saldo'] . "\n";
    echo "CPF do cliente: " . $cpf . "\n";
    echo "\n";
} 