<?php
    // Verificação de Idade
    // Peça para o usuário digitar sua idade.
    $idade = readline("Olá !! Qual a sua idade?\n");
    if ($idade >= 18) {
        echo "Você é maior idade";
    } else {
        echo "Você é menor idade";
    }
?>