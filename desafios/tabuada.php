<?php

$numero = 10;

echo "tabuada de $numero\n";

for ($i = 1; $i <= 10; $i++) {
    $multiplicacao = $numero * $i;
    echo "$numero * $i = $multiplicacao\n";
}

echo PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    $soma = $numero + $i;
    echo "$numero + $i = $soma\n";
}

echo PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    $subtracao = $numero - $i;
    echo "$numero - $i = $subtracao\n";
}

echo PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    $divisao = $numero / $i;
    echo "$numero / $i = $divisao\n";
}