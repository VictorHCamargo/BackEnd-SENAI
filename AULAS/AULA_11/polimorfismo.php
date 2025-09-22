<?php
    // Polimorfismo:
    // O termo Polimorfismo significa "varias formas". Associando isso a Programação Orientada a Objetos, o conceito se trata de várias classes e suas instâncias (objetos) respondendo a um mesmo método de formas diferentes. No exemplo do Interface da Aula_09, temos um método CalcularArea() que responde de forma diferente á classe Quadrado, classe Pentágono e à classe Circulo. Isso quer dizer que a função é a mesma - calcular a área da forma geométrica - mas a operação muda de acordo com a figura.

    // Crie um método chamado "mover()", aonde ele responde de várias formas diferentes, para as sub-classes: Carro,Avião, Barco e Elevador. Dica: utilize Interfaces
    namespace AULAS\AULA_11;
    interface Veiculo {
        public function mover();
    }
    class Carro implements Veiculo {
        public String $nome;
        public function mover() {
            echo "Carro movendo";
        }
    }
    class Aviao implements Veiculo {
        public String $nome;
        public function mover() {
            echo "Avião voando";
        }
    }
    class Barco implements Veiculo {
        public String $nome;
        public function mover() {
            echo "Barco navegando";
        }
    }
    $carro1 = new Carro();
    $carro1->nome = "Fox";
    $carro1->mover();
    $carro2 = new Carro();
    $carro2->nome = "Spacefox";
    $carro2->mover();
?>
