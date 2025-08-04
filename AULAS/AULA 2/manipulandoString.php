<?php 
    # Respondendo as questões 2 e 3 do slide apresentado dia 04/08 no laboratorio de ADS no SENAI Limeira
    /* 2. Dado uma frase “Programação em php.” transformá‐la em maiúscula, imprima,
    depois em minúscula e imprima de novo. */
    $string = "Programação em php";
    echo $string;
    //Funções upper e lower em php
    $string_maiuscula = strtoupper(string: $string);
    echo "\n Maiúscula: ", $string_maiuscula;
    $string_minuscula = strtolower(string: $string);
    echo "\n Minúscula: ",$string_minuscula;
    /* 3. Numa dada frase “O PHP foi criado em mil novecentos e noventa e cinco”.
    - Trocar o “O” (letra) por “0”(zero), o “a” por “4” e o “i” por “1”. */
    $frase = "O PHP foi criado em mil novecentos e noventa e cinco";
    //Funções de troca de caracteres
    echo "\n Antes de aplicar as alterações: ", $frase;
    # formas alternativas de resolver essa questão:
    // $frase = str_replace("O","0",str_replace("a","4",str_replace("i","1",$frase)));
    // $frase = str_replace(['O','a','i'],['0','4','1'],$frase);
    $frase = str_replace("O","0",$frase);
    $frase = str_replace("a","4",$frase);
    $frase = str_replace("i","1",$frase);
    echo "\n Depois de aplicar as alterações: ", $frase;
?>