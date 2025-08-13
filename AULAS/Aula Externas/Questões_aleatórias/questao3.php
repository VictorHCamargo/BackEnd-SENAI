<?php
    class contaBancaria {
        protected float $saldo = 0;
        public float $valor;
        public function depositar($valor) {
            $this->saldo = $valor;
        }
        public function verSaldo() {
            echo "Seu saldo atual é R$$this->saldo";
        }
    }
    $conta = new contaBancaria();
    $conta->depositar(900.55);
    $conta->verSaldo();
?>