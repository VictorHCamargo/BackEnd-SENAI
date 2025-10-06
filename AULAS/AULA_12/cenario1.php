<!-- Cenário 1 – Viagem pelo Mundo
Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
Terra, eles poderão comer comidas típicas e nadar em rios ou praias. -->
<?php
    namespace AULAS\AULA_12;
    class Pessoas {
        private String $paisVisita;
        public function __construct($paisVisita){
            $this->setVisita($paisVisita);
        }
        public function setVisita($paisVisita) {
            $this->paisVisita = ucwords(strtolower($paisVisita));
        }
        public function getVisita() {
            return $this->paisVisita;
        }
        public function visitar()  {
            echo "Visitando...  " . $this->getVisita();
        }
    }
    class Lugares { 
        private String $comidaTipica;
        private String $nadandoEm;
        public function __construct($comidaTipica,$nadandoEm){
            $this->setComida($comidaTipica);
            $this->setNadando($nadandoEm);
        }
        public function setComida($comidaTipica) {
            $this->comidaTipica = ucwords(strtolower($comidaTipica));
        }
        public function getComida() {
            return $this->comidaTipica;
        }
        public function setNadando($nadandoEm) {
            $this->nadandoEm = ucwords(strtolower($nadandoEm));
        }
        public function getNadando() {
            return $this->nadandoEm;
        }
        public function comer() {
            echo "Comendo... " . $this->getComida();
        }
        public function nadar() {
            echo "Nadando em... ". $this->getNadando();
        }
    }

    // Lugares associas pessoas, pois pessoas e lugares podem existir separadamente
?>