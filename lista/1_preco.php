<?php

// Declaração das Variáveis
$preco = 1000;
$quantidade = 2;

// Calculando o Preço
$valorTotal = $preco * $quantidade;

if ($valorTotal >= 200.00) {
    // Se - for maior que 200
    $desconto = $valorTotal * 0.10; // Calcula os 10% de desconto
    $valorFinal = $valorTotal - $desconto;
    
    // Exibindo o resultado da compra, do desconto e o total a ser pago
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>"; // number_format($valorTotal, 2, ',', '.' - Significa que o formato que será exibido será com 2 casas depois da virgula, e que com numeros de casa de milhar será separado com "."
    echo "Desconto (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');

} else {

    // Senão - for menor que 200
    $valorFinal = $valorTotal;
    
    // Exibindo o resultado da compra, sem desconto e o total a ser pago
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Aviso: Sem desconto aplicado (compras abaixo de R$ 200,00)." . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
}

?>