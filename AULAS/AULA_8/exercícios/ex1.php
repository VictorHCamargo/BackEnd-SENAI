<?php
// Criação básica
// Crie uma classe chamada Carro com os atributos privados marca e
// modelo.
// o Implemente os métodos setMarca, getMarca, setModelo e getModelo.
// o Crie um objeto da classe e use os setters para atribuir valores
// e os getters para exibir os dados.
    class Car {
        private String $marca;
        private String $modelo;

        public function __construct($marca,$modelo) {
            $this->setMarca($marca);
            $this->setModelo($modelo);
        }
        // Setter para marca
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        // Setter para Modelo
        public function setModelo($modelo) {
            $this->modelo = ucwords(strtolower($modelo));
        }
        public function getMarca() {
            return $this->marca;
        }
        public function getModelo() {
            return $this->modelo;
        }
    }
    $car1 = new Car("Hyundai","HB20");
    echo $car1->getMarca(). "\n" . $car1->getModelo();
?>