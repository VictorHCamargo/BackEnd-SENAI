<?php 
    // Dia da Semana
    // Solicite ao usuário um número de 1 a 7 e exiba o dia correspondente usando
    // switch...case.
    $numero = readline("Digite um numero entre 1 e 7: ");
    switch ($numero) {
        case 1:
            echo "Domingo";
            break;
        case '2':
            echo "Segunda-feira";
            break;
        case '3':
            echo "Terça-feira";
            break;
        case '4':
            echo "Quarta-feira";
            break;
        case '5':
            echo "Quinta-feira";
            break;
        case '6':
            echo "Sexta-feira";
            break;
        case '7':
            echo "Sábado";
            break;
        default:
            echo "Dia da semana não existente!!";
            break;
    }
?>