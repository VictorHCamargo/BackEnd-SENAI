<?php
    // Classificação de Nota
    // Leia uma nota de 0 a 10.
    $nota = readline("Digite sua nota: ");
    if ($nota >= 9) {
        echo "EXCELENTE!!";
    } elseif ($nota >= 7) {
        echo "BOM";
    } else {
        echo "REPROVADO";
    }
?> 