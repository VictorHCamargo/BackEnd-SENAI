<?php
    class calculadora {
        public int $num1;
        public int $num2;
        public function __construct($num1,$num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        public function somar() {
            return $this->num1 + $this->num2;
        }
        public function apresentarResultados() {
            $resultado = $this->somar();
            echo "O resultado da soma entre $this->num1 e $this->num2 é igual a $resultado";
        }
    }
    $calculo = new calculadora(245,-90);
    $calculo->apresentarResultados()
?>