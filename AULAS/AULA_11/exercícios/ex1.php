<?php
// Exercício 1 – Formas Geométricas
// Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
// - `Quadrado` (lado),
// - `Retangulo` (base e altura),
// - `Circulo` (raio).
    namespace AULAS\AULA_11\Exercícios;
    interface Forma {
        public function calcularArea($valor1,$valor2);
    }

    class Quadrado implements Forma {
        public function calcularArea($valor1,$valor2 = 0) {
            echo "\nValor da área do quadrado é ". $valor1**2;
        }
    }
    class Retangulo implements Forma {
        public function calcularArea($valor1,$valor2) {
            echo "\nValor da área do retangulo é ". $valor1*$valor2;
        }
    }
    class Circulo implements Forma {
        public function calcularArea($valor1,$valor2=0) {
            echo "\nValor da área do circulo é ". $valor1**2*number_format(pi(),2);
        }
    }
    $forma1 = new Circulo();
    $forma1->calcularArea(2);
    $forma2 = new Quadrado();
    $forma2->calcularArea(4);
    $forma3 = new Retangulo();
    $forma3->calcularArea(4,5);
?>