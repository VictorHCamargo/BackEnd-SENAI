<!-- Utilizando pela primeira vez o constructor -->
<?php
    class Pessoa {
        public string $nome;
        public int $idade;
        public function __construct($nome,$idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function apresentar() {
            echo "Olá eu sou o $this->nome e tenho $this->idade anos";
        }
    }
    $eu = new Pessoa("Victor",17);
    $eu->apresentar();
?>