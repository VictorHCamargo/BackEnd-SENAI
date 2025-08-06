<?php
    $nome = "Motta";
    $nota1 = 9;
    $nota2 = 0;
    $media = ($nota1 + $nota2)/2;
    //Se a presença do aluno for menor que 75% será reprovado automaticamente
    $presenca = 80/100;
    if ($nome == "") {
        /*Para realizar a condição deve ser chamada a variável 
        e logo depois comparada com algum valor */
        if ($media >= 7 && $presenca >= 0.75) {
            echo "Aprovado por média e presença exelente";
        } else if ($media < 7 && $media >=5 && $presenca >= 0.75) {
            echo "Recuperação por média baixa";
        } else echo "Reprovado por presença ou média vermelha";
    } else {
        echo "Aprovado por nome bonito";
    }
    
?>