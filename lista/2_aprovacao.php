<?php

// Declaração das Variáveis
$media = 7.5;
$faltas = 10;

// O && faz com que ambas das variáveis sejam lidas e confirmadas
if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno APROVADO! <br> Média: $media <br> Faltas: $faltas";
} else {
    echo "Aluno REPROVADO! <br> Média: $media <br> Faltas: $faltas";
}

?>