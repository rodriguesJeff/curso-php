<?php 

$idade = 16;
$totalDePessoas = 2;

echo "Voce so pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado por um responsavel\n";

if ($idade >= 18) {
    echo "Voce tem $idade anos, pode entrar sozinho\n";
}else if ($idade >= 16 && $totalDePessoas > 1) {
    echo "Voce tem $idade anos e esta acompanhado, pode entrar";
} else {
    echo "Voce ainda nao tem idade suficiente ou nao esta acompanhado";
}