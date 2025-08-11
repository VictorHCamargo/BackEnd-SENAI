<!-- Faça um algoritmo que leia 2 valores digitados pelo usuárop e interprete o tipo de 
variável que foi digitado. Caso os Tipos sejam iguais, a seguinte mensagem deve ser exibida: "Variáveis de tipos iguais!"
Primeiro valor do tipo [type] e segundo valor do tipo [type]". Caso não, a seguinte mensagem: "ERRO! Variáveis de tipos diferentes.
Primeiro valor do tipo [type] e segundo valor do tipo [type]"
Como a função de extrair o tipo da variável ainda não foi ensinada, o aluno deve pesquisar (SEM IA) como fazer isso. -->
<?php 
    $any = 2;
    $any2 = true;
    $gettype = gettype($any);
    $gettype2 = gettype($any2);
    echo ($gettype == $gettype2)?"Variáveis de tipos iguais!Primeiro valor do tipo [$gettype] e segundo valor do tipo [$gettype2]":"ERRO! Variáveis de tipos diferentes.
    Primeiro valor do tipo [$gettype] e segundo valor do tipo [$gettype2]";
?>