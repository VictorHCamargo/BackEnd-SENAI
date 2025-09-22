
<?php
// Exercício 5 – Calculadora com Sobrecarga Simulada
// Crie uma classe `Calculadora` com o método `somar()`.
// - Se receber 2 números, retorna a soma dos dois.
// - Se receber 3 números, retorna a soma dos três.

    class Calculadora {
        public function somar($valor1,$valor2,$valor3=0) {
            if($valor3 != 0) {
                echo "A soma dos três números é " . $valor1+$valor2+$valor3;
            } else {
                echo "A soma dos dois números é ". $valor1+$valor2;
            }
            
        }
    }
    $calc1 = new Calculadora();
    $calc1->somar(30,20);
    $calc2 = new Calculadora();
    $calc2->somar(30,20,-20);
?>