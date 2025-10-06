<!-- Cenário 2 – Heróis e Personagens
O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
brinquedos às crianças. -->
<?php
    namespace AULAS\AULA_12;
    
    class Superherois {
        private String $nome;
        public function __construct($nome) {
            $this->setNome($nome);
        }
        public function setNome($nome) {
            $this->nome = ucwords(strtolower($nome));
        }
        public function getNome() {
            return $this->nome;
        }
        public function fazerTreinamento() {
            echo "O $this->nome está fazendo um treinamento no Cotil";
        }
    }
    class Locais { 
        private String $nomeLocal;
        public function __construct($nomeLocal) {
            $this->setNomeLocal($nomeLocal);
        }
        public function setNomeLocal($nomeLocal) {
            $this->nomeLocal = ucwords(strtolower($nomeLocal));
        }
        public function getNomeLocal() {
            return $this->nomeLocal;
        }
        public function doar() {
            echo "Doando em... ". $this->nomeLocal;
        }
    }
    //Locais e Superherois são associados, pois cada um pode existir separadamente






?>