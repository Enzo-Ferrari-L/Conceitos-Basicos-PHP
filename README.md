# Conceitos-Basicos-PHP



## Lista 1: Conceitos Básicos de PHP

> **Componente Curricular:** Programação Back-end  
> **Curso:** Técnico em Desenvolvimento de Sistemas  
> **Instituição:** Escola SENAI "A. Jacob Lafer" (UFP - 1.18)  
> **Docentes:** Prof. Ignacio / Prof. Denis  

---

##  Sobre o Repositório

Este repositório contém a resolução da **Lista 1 de Exercícios de Programação Back-end**, focada nos conceitos fundamentais da linguagem **PHP**. 

O objetivo principal das atividades é praticar a sintaxe básica da linguagem, estruturação de condições (`if`, `else`, `elseif`), operadores lógicos (`&&`), laços de repetição (`for`, `foreach`), manipulação de arrays e criação de funções personalizadas.

---

##  Estrutura de Arquivos

```bash
.
├── 1_preco.php      # Exercício 1: Cálculo de preço e desconto de produto
├── 2_aprovacao.php  # Exercício 2: Condição de aprovação de aluno (Média e Faltas)
├── 3_tabuada.php    # Exercício 3: Tabuada automatizada utilizando 'for'
├── 4_notas.php      # Exercício 4: Análise de notas (Array, 'foreach', Maior e Menor)
├── 5_imc.php        # Exercício 5: Função de cálculo e classificação de IMC
└── README.md        # Documentação do projeto
```

---

##  Exercícios Desenvolvidos

### 1. Cálculo de Preço e Desconto (`1_preco.php`)
* **Objetivo:** Calcular o valor total de uma compra com base no preço unitário e na quantidade. Se o valor total for maior ou igual a **R$ 200,00**, aplica-se um desconto de **10%**.
* **Principais Conceitos:** Estrutura condicional `if/else`, formatação monetária com `number_format()`.
* **Código Implementado:**
```php
<?php
// Declaração das Variáveis
$preco = 1000;
$quantidade = 2;

// Calculando o Preço
$valorTotal = $preco * $quantidade;

if ($valorTotal >= 200.00) {
    // Se for maior ou igual a 200
    $desconto = $valorTotal * 0.10; // Calcula os 10% de desconto
    $valorFinal = $valorTotal - $desconto;

    // Exibindo o resultado da compra, do desconto e o total a ser pago
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Desconto (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
} else {
    // Senão (menor que 200)
    $valorFinal = $valorTotal;

    // Exibindo o resultado sem desconto
    echo "Valor Total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Aviso: Sem desconto aplicado (compras abaixo de R$ 200,00)." . "<br>";
    echo "Valor Final a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
}
?>
```

---

### 2. Verificação de Aprovação Escolar (`2_aprovacao.php`)
* **Objetivo:** Determinar a aprovação de um aluno. O aluno é aprovado **somente** se a média for maior/igual a **6.0** **E** a quantidade de faltas for menor/igual a **15**.
* **Principais Conceitos:** Operador lógico `&&` (AND), condicional simples.
* **Código Implementado:**
```php
<?php
// Declaração das Variáveis
$media = 7.5;
$faltas = 10;

// O && exige que ambas as condições sejam verdadeiras
if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno APROVADO! <br> Média: $media <br> Faltas: $faltas";
} else {
    echo "Aluno REPROVADO! <br> Média: $media <br> Faltas: $faltas";
}
?>
```

---

### 3. Tabuada com Laço `for` (`3_tabuada.php`)
* **Objetivo:** Exibir a tabuada de 1 a 10 de um determinado número informado via variável.
* **Principais Conceitos:** Estrutura de repetição `for`, interpolação de variáveis na saída `echo`.
* **Código Implementado:**
```php
<?php
// Declaração da Variável (Número da Tabuada)
$numero = 5;

// Calculando a Tabuada
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>
```

---

### 4. Processamento de Notas com Vetor/Array (`4_notas.php`)
* **Objetivo:** Armazenar as notas de 5 alunos em um vetor, percorrer o vetor com `foreach` para calcular a média da turma, além de identificar a maior e a menor nota.
* **Principais Conceitos:** Arrays numéricos, laço `foreach`, acumuladores, lógica de comparação e função `count()`.
* **Código Implementado:**
```php
<?php
$notas = [4, 5, 7, 7.5, 9];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

// Somando as notas e encontrando os extremos
foreach ($notas as $nota) {
    $soma += $nota;

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
```

---

### 5. Cálculo e Classificação de IMC (`5_imc.php`)
* **Objetivo:** Criar uma função `calcularIMC($peso, $altura)` que retorna o índice de massa corporal. No programa principal, classificar o valor em: *Abaixo do peso*, *Peso normal*, *Sobrepeso* ou *Obesidade*.
* **Principais Conceitos:** Funções com parâmetros e retorno, estruturas encadeadas `if / elseif / else`.
* **Código Implementado:**
```php
<?php
// Função que recebe Peso e Altura, e retorna o cálculo
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
```

---

##  Como Executar os Arquivos

### Opção 1: Pelo Terminal (CLI PHP)
Certifique-se de ter o PHP instalado em sua máquina e execute no terminal:
```bash
php 1_preco.php
php 2_aprovacao.php
php 3_tabuada.php
php 4_notas.php
php 5_imc.php
```

### Opção 2: Servidor Embutido do PHP
Na raiz do projeto, inicie o servidor interno:
```bash
php -S localhost:8000
```
Acesse no navegador: `http://localhost:8000/1_preco.php`

---

##  Tecnologias Utilizadas

- **PHP** (v8.x)
- **VS Code** (com extensão PHP Intelephense)
- **Git & GitHub** (Controle de versão)

---

Developed for **SENAI - Escola "A. Jacob Lafer"** | Curso Técnico em Desenvolvimento de Sistemas
