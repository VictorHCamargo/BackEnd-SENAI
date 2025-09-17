<?php
// Exercício 3 – Meios de Transporte
// Crie uma classe abstrata `Transporte` com o método `mover()`. Implemente as classes:

// - `Carro` → "O carro está andando na estrada",
// - `Barco` → "O barco está navegando no mar",
// - `Avião` → "O avião está voando no céu".
// - `Elevador` → "O Elevador está correndo pelo no prédio".
    namespace AULAS\AULA_11\Exercícios;
    abstract class Transporte {
        abstract public function mover();
    }
    class Carro extends Transporte {
        public function mover() {
            echo "\nO carro está andando na estrada";
        }
    }
    class Barco extends Transporte {
        public function mover() {
            echo "\nO barco está navegando no mar";
        }
    }
    class Aviao extends Transporte {
        public function mover() {
            echo "\nO avião está voando no céu";
        }
    }
    class Elevador extends Transporte {
        public function mover() {
            echo "\nO Elevador está correndo pelo no prédio";
        }
    }
    $car1 = new Carro();
    $car1->mover();
    $boat1 = new Barco();
    $boat1->mover();
    $airplane1 = new Aviao();
    $airplane1->mover();
    $elevator1 = new Elevador();
    $elevator1->mover();
?>