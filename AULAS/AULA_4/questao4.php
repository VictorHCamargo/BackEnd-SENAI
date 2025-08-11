<?php
    // Calculadora Simples
    // Peça dois números e uma operação (+, -, *, /).
    $numero1 = readline("Digite um número: ");
    $numero2 = readline("Digite outro número: ");
    $escolha = readline("Digite que tipo de cálculo você deseja realizar: (Operadores válidos '+','-','*' e '/'");
    $soma = $numero1 + $numero2;
    $sub = $numero1 - $numero2;
    $mult = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    switch ($escolha) {
        case '+':
            echo "A soma de $numero1 e $numero2 é $soma";
            break;
        case '-':
            echo "A subtração de $numero1 e $numero2 é $sub";
            break;
        case '*':
            echo "A multiplicação de $numero1 e $numero2 é $mult";
            break;
        case '/':
            echo "A divisão de $numero1 e $numero2 é $div";
            break;
        default:
            echo "Operador inválido";
            break;
    }
?>