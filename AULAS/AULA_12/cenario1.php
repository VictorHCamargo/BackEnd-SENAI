<!-- Cenário 1 – Viagem pelo Mundo
Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
Terra, eles poderão comer comidas típicas e nadar em rios ou praias. -->
<?php
    namespace AULAS\AULA_12;
    class Pessoas {
        private String $paisVisita;
        public function __construct($paisVisita){
            $this->paisVisita = $paisVisita;
        }
        public function visitar()  {
            echo "Visitando...  " . $this->paisVisita;
        }
    }
    class Lugares {
        private String $comidaTipica;
        private String $nadandoEm;
        public function __construct($comidaTipica,$nadandoEm){
            $this->comidaTipica = $comidaTipica;
            $this->nadandoEm = $nadandoEm;
        }
        public function comer() {
            echo "Comendo... " . $this->comidaTipica;
        }
        public function nadar() {
            echo "Nadando em... ". $this->nadandoEm;
        }
    }


?>