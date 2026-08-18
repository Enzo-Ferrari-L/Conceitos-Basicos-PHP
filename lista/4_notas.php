<?php
$notas = [4, 5, 7, 7.5, 9];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

// Somando as notas
foreach ($notas as $nota) {
    $soma += $nota; 

// Vendo qual é a maior e menor nota dentre os 5 alunos
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

// Calculando a média
$mediaTurma = $soma / count($notas);

// Exibindo o Resultado
echo "Média dos 5 alunos: " . number_format($mediaTurma, 1, ',') . "<br>";
echo "Maior nota dentre os 5 alunos: $maiorNota" . "<br>";
echo "Menor nota dentre os 5 alunos: $menorNota" . "<br>";

?>