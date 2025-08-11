<?php
// Números Pares
// Peça um número final e use for para exibir todos os números pares de 0 até esse
// número.
    $numero = readline("Digite um número que deseja ver todos os pares dele desde o 0: ");
    for ($i = 0; $i <= $numero; $i++) {
        if (($i %2 )== 0) {
            echo "$i\n";
        }
    }
?>