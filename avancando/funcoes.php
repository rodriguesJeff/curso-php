<?php

function sacar(array $conta, float $valor) {
    if ($valor > $conta['saldo']){
        exibeMensagem("Voce nao pode sacar");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta; // funcao devolve algum valor novo
}

function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL; // sub rotina nao retorna nada
}

function depositar(array $conta, float $valor) : array {
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depositos tem que ser positivos");
    }
    
    return  $conta;
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}