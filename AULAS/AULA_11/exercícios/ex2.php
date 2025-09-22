<?php
// Exercício 2 – Animais e Sons
// Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
// - `Cachorro` → "Au au!",
// - `Gato` → "Miau!",
// - `Vaca` → "Muuu!".
    namespace AULAS\AULA_11\Exercícios;

    class Animal {
        public function fazerSom($msg) {
            echo "\n".$msg;
        }
    }
    class Gato extends Animal {
        public function __construct($som) {
            $this->fazerSom($som);
        }
    }
    class Vaca extends Animal {
        public function __construct($som) {
            $this->fazerSom($som);
        }
    }
    class Cachorro extends Animal {
        public function __construct($som) {
            $this->fazerSom($som);
        }
    }
    $dog1 = new Cachorro("Au au!");
    $cat1 = new Gato("Miau!");
    $cow1 = new Vaca("Muuuu!");
?>