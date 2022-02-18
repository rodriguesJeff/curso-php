<?php

$peso = 72;
$altura = 1.82;

$imc = $peso / ($altura**2);

if ($imc >= 16 && $imc <= 16.9) {
    echo "Seu IMC $imc\n";
    echo "Muito abaixo do peso\n";
    echo "Queda de cabelo, infertilidade, ausência menstrual\n";
} else if ($imc == 17 && $imc <= 18.4) {
    echo "Seu IMC $imc\n";
    echo "Abaixo do peso\n";
    echo "Fadiga, stress, ansiedade\n";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Seu IMC $imc\n";
    echo "Peso normal\n";
    echo "Menor risco de doenças cardíacas e vasculares\n";
} else if ($imc >= 24.5 && $imc <= 29.9) {
    echo "Seu IMC $imc\n";
    echo "Acima do peso\n";
    echo "Fadiga, má circulação, varizes\n";
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "Seu IMC $imc\n";
    echo "Obesidade grau I\n";
    echo "Diabetes, angina, infarto, aterosclerose";
} else if ($imc >= 35 && $imc <= 40) {
    echo "Seu IMC $imc\n";
    echo "Obesidade grau II\n";
    echo "Apneia do sono, falta de ar\n";
} else if ($imc > 40) {
    echo "Seu IMC $imc\n";
    echo "Obesidade grau III\n";
    echo "Refluxo, dificuldade para se mover, escaras, diabetes, infarto, AVC\n";
} else {
    echo "Nao conseguimos mapear sua situacao";
}