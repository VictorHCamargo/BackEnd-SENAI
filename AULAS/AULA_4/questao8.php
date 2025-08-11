<?php
    // Tabuada
    // Solicite ao usuário um número e use for para exibir sua tabuada de 1 a 10.
    $numero = readline("Digite um número para visualizar a tabuada do mesmo: ");
    echo "Tabuada do $numero \n";
    for($i =0;$i <=10;$i++) {
        echo "\nResultado de $numero * $i = ". ($i * $numero);
    }
?>