<?php
    $nome = readline("Digite seu nome: \n");
    $nota1 = readline("Digite a 1º nota do aluno: \n");
    $nota2 = readline("Digite a 2ª nota do aluno: \n");
    $media = ($nota1 + $nota2)/2;
    //Se a presença do aluno for menor que 75% será reprovado automaticamente
    $presenca = readline("Digite a presença do aluno: \n");
    if ($nome == "") {
        /*Para realizar a condição deve ser chamada a variável 
        e logo depois comparada com algum valor */
        if ($media >= 7 && ($presenca/100) >= 0.75) {
            echo "Aprovado com uma média de $media e com uma presença $presenca%";
        } else if ($media < 7 && $media >=5 && $presenca >= 0.75) {
            echo "Recuperação com uma média de $media";
        } else echo "Reprovado por presença baixa ($presenca%) ou por média baixa ($media)";
    } else {
        echo "Aprovado por nome bonito";
    }
?>