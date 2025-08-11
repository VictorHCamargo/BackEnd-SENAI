<?php
// Contagem Regressiva
// Peça um número inicial e exiba a contagem regressiva até 1 usando for.
    $numero = readline("Digite um número para iniciar uma contagem REGRESSIVA: ");
    for($i = $numero; $i >= 1; $i--) {
        echo "$i\n";
    }
?>