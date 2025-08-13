<?php
    class Carro {
        public string $marca;
        public function mostrarMarca() {
            echo "A marca do carro é $this->marca";
        }
    }
    $honda = new Carro();
    $honda->marca = "Honda";
    $honda->mostrarMarca();
?>