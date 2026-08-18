<?php

// Função que recebe Peso e Altura, e retorna o calculo
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// Declarando a Altura e o Peso
$meuPeso = 80;
$minhaAltura = 1.79;

// Calculando o IMC
$resultadoIMC = calcularIMC($meuPeso, $minhaAltura);
echo "Seu IMC é: " . number_format($resultadoIMC, 2) . "<br>";

// Classificando o Resultado
    if ($resultadoIMC < 18.5) {
       echo "Classificação do IMC: Abaixo do peso";
    } elseif ($resultadoIMC <= 24.9) {
        echo "Classificação do IMC: Peso normal";
    } elseif ($resultadoIMC <= 29.9) {
        echo "Classificação do IMC: Sobrepeso";
    } else {
        echo "Classificação do IMC: Obesidade";
}

?>