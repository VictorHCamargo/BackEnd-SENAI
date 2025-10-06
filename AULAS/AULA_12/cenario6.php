<!-- Cenário 6 – Leia o enunciado do problema
"Um sistema de cinema deve permitir que clientes comprem ingressos para
sessões de filmes." -->


<?php

    class Cinema extends Sessao {
        public function __construct($nomeFilme,$classificaoEtaria)
        {
            parent::__construct($nomeFilme,$classificaoEtaria);
        }
        public function comprarIngressos(){
            echo "Ingresso Comprado para  o filme ". $this->getNome(). " no qual tem uma classificao de ". $this->getClassificao() . " Anos";
        }
    }
    class Sessao {
        private String $nomeFilme;
        private int $classificao;

        public function __construct($nomeFilme,$classificaoEtaria) {
            $this->setNome($nomeFilme);
            $this->setClassificao($classificaoEtaria);
        }
        public function setNome($nome) {
            $this->nomeFilme = ucwords(strtolower($nome));
        }
        public function setClassificao($classificao) {
            $this->classificao = abs($classificao);
        }
        public function getNome() {
            return $this->nomeFilme;
        }
         public function getClassificao() {
            return $this->classificao;
        }
        
    }
    class Clientes extends Cinema {

    }
    //Sessão com cinema é uma composição
    // Clientes com cinema é uma associação 
?>