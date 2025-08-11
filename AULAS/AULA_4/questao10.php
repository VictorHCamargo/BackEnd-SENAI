<?php
    // Menu Interativo
    // Mostre no console:
    // 1 - Olá
    // 2 - Data Atual
    // 3 - Sair
    // • Use switch...case para executar a opção escolhida pelo usuário.
    // • O programa só termina quando o usuário escolher "3 - Sair".
    // • Use for para repetir o menu um número fixo de vezes, por exemplo, 5 vezes.
    for($i = 0; $i <=1; $i++) {
        $escolha = readline("\nFaça uma escolha: \n(1 - Olá;\n2 - Data atual;\n3 - Sair)");
        switch($escolha) {
            case 1:
                echo "\nOlá, Bem-vindo ao Mundo";
                $i--;
                break;
            case 2:
                echo "\nA data de hoje é 11/08/2025";
                $i--;
                break;
            case 3:
                $i++;
                break;
            default:
                echo "Opção inválida!!";
                $i--;
                break;
        }
    }
?>