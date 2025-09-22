<?php
// Exercício extra - Polimorfismo

// Crie 3 Interfaces:
// Movel → Método mover()
// Abastecivel → Método abastecer($quantidade)
// Manutenivel → Método fazerManutencao()

// Crie as classes:
// Carro → Deve implementar Movel e Abastecivel.
// • mover() imprime que o carro está se movimentando.
// • abastecer($quantidade) imprime a quantidade abastecida.

// Bicicleta → Deve implementar Movel e Manutenivel.
// • mover() imprime que a bicicleta está pedalando.
// • fazerManutencao() imprime que a bicicleta foi lubrificada.

// Onibus → Deve implementar Movel, Abastecivel e Manutenivel.
// • mover() imprime que o ônibus está transportando passageiros.
// • abastecer($quantidade) imprime a quantidade abastecida.
// • fazerManutencao() imprime que o ônibus está passando por revisão.

    namespace AULAS\AULA_11\Exercícios;
    
    interface Movel {
        public function mover();
    }
    interface Abastecivel {
        public function abastecer($quantidade);
    }
    interface Manutenivel {
        public function fazerManutencao();
    }
    class Car implements Movel, Abastecivel {
        public function mover() {
            echo "\nO carro está se movimentando";
        }
        public function abastecer($quantidade) {
            echo "\nO carro foi abastecido com $quantidade";
        }
    }
    class Bicicleta implements Movel, Manutenivel {
        public function mover() {
            echo "\nA bicicleta está pedalando";
        }
        public function fazerManutencao() {
            echo "\nA bicicleta foi lubrificada";
        }
    }
    class Onibus implements Movel,Abastecivel,Manutenivel {
        public function mover() {
            echo "\nO ônibus está transportando passageiros";
        }
        public function abastecer($quantidade) {
            echo "\nO ônibus foi abastecido com $quantidade";
        }
        public function fazerManutencao() {
            echo "\nO ônibus está passando por revisão";
        }
    }
    $onibus = new Onibus();
    $onibus->abastecer(200);
    $onibus->mover();
    $onibus->fazerManutencao();
    $carro = new Car();
    $carro->abastecer(1000);
    $carro->mover();
    $bike = new Bicicleta();
    $bike->mover();
    $bike->fazerManutencao();
?>