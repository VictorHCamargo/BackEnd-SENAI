<!-- Cenário 2 – Heróis e Personagens
O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
brinquedos às crianças. -->
<?php
    namespace AULAS\AULA_12;
    
    class Superherois {
        private String $nome;
        public function __construct($nome) {
            $this->nome = $nome;
        }
        public function fazerTreinamento() {
            echo "O $this->nome está fazendo um treinamento no Cotil";
        }
    }
    class Locais {
        private String $nomeLocal;
        public function __construct($nomeLocal) {
            $this->nomeLocal = $nomeLocal;
        }

        public function doar() {
            echo "Doando em... ". $this->nomeLocal;
        }
    }






?>