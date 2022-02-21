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

// unset($contas[33333333333]);

// foreach ($contas as $cpf => $conta) {
//     echo "Conta do $conta[titular] <br>";
//     echo "Saldo: R\$ {$conta['saldo']} <br>";
//     echo "CPF do cliente: $cpf <br>";
//     echo "<br>";
// } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contas as $cpf => $conta) {?>}
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>