<?php
//Modelagem de dados sem a utilização de POO (Programação Orientada a Objetos)
$marca_carro1 = "Honda";
$modelo_carro1 = "Civic";
$ano_carro1 = 2016;
$revisao_carro1 = true;
$ndedonos_carro1 = 2;

$marca_carro2 = "BWM";
$modelo_carro2 = "320i";
$ano_carro2 = 2012;
$revisao_carro2 = false;
$ndedonos_carro2 = 3;

$marca_carro3 = "FIAT";
$modelo_carro3 = "UNO";
$ano_carro3 = 2005;
$revisao_carro3 = false;
$ndedonos_carro3 = 1;

$marca_carro4 = "VOLKSWAGEM";
$modelo_carro4 = "JETTA";
$ano_carro4 = 2020;
$revisao_carro4 = true;
$ndedonos_carro4 = 7;

function revisaoFeita($rev) {
    $rev = true;
    return $rev;
}
$revisao_carro3 = revisaoFeita($revisao_carro3);

function novoDono($novodono) {
    return $novodono+1;
}

$ndedonos_carro4 = novoDono($ndedonos_carro4);
echo $ndedonos_carro4;

// Exercício 1 – Função para exibir dados do carro
// Crie uma função exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) que receba como
// parâmetros os dados de um carro e exiba uma mensagem no seguinte formato:
// O carro Nissan Versa, ano 2020, já passou por revisão: Sim, número de donos: 2
function exibirDados($marca,$modelo,$ano,$revisao,$numeroDonos) {
    if ($revisao == true) {
        echo "\nO carro $marca $modelo, ano $ano, já passou por revisão: Sim, número de donos: $numeroDonos";
    } else {
        echo "\nO carro $marca $modelo, ano $ano, já passou por revisão: não, número de donos: $numeroDonos";
    }
}
exibirDados($marca_carro1,$modelo_carro1,$ano_carro1,$revisao_carro1,$ndedonos_carro1);

// Exercício 2 – Função que verifica se o carro é seminovo
// Crie uma função ehSeminovo($ano) que receba o ano de fabricação e retorne true se o
// carro tiver até 3 anos de uso e false caso contrário.
// Teste a função com os carros fornecidos.
function semiNovo($ano) {
    if ((2025 - $ano) <= 3) {
        echo "\nSeu carro é seminovo";
    } else {
        echo "\nSeu carro não é seminovo";
    }
}
semiNovo($ano_carro3);
// Exercício 3 – Função que verifica necessidade de revisão
// Crie uma função precisaRevisao($revisao, $ano) que retorne "Precisa de revisão" se $revisao
// for false e o carro for anterior a 2022. Caso contrário, retorne "Revisão em dia".
function precisaRevisao($revisao,$ano) {
    if($revisao == false && $ano <= 2022) {
        echo "\nSeu carro precisa de revisão";
    } else {
        echo "\nSeu carro não precisa de revisão";
    }
}
precisaRevisao($revisao_carro2,$ano_carro2);

// Exercício 4 – Função que calcula valor estimado
// Crie uma função calcularValor($marca, $ano, $Ndonos) que estime o preço do carro usando
// regras simples, por exemplo:
// • Carros da BMW e Fiat têm preço base de R$ 300.000
// • Volkswagen: R$ 70.000
// • Honda: R$ 150.000
// • A cada dono adicional além do primeiro, o valor cai 5%
// • Para cada ano de uso, o valor cai R$ 3.000
// A função deve retornar o valor estimado e você deve imprimir o resultado para cada
// carro.

function valorEstimado($marca,$ano,$qtde_donos) {
    switch($marca) {
        case "Honda":
            $valor = 150;
            break;
        case "FIAT":
            $valor = 300;
            break;
        case "VOLKSWAGEM":
            $valor = 70;
            break;
        case "BMW":
            $valor = 300;
            break;
        default:
            $valor = 0;
            echo  "\nNenhum carro inserido";
            break;
    }
    for($i = 0; $i <= (2025 - $ano); $i++) {
        $valor -= 3;
    }
    if($qtde_donos > 1) {
        for($i = 1; $i <= $qtde_donos; $i++) {
            $valor *= 0.95;
        }
    }
    if($valor != 0) {
        $valor = $valor * 1000;
        echo "\nO valor de seu carro estimado é R$$valor";
    }
}
valorEstimado($marca_carro1,$ano_carro1,$ndedonos_carro1);
?>