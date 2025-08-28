<!-- Exercício 5:
Crie um método para a classe 'Cachorro' chamado de 'latir', no qual exibe uma
mensagem "O cachorro $nome está latindo!" -->


<!-- Exercício 6:
Crie outro método para a classe 'Cachorro' chamado de 'marcar território', no qual
exibe uma mensagem "O cachorro $nome da raça $raça está marcando território". -->



<?php
    class Cachorro {
        public String $nome;
        public int $idade;
        public String $raca;
        public bool $castrado;
        public String $sexo;

        public function __construct($nome,$idade,$raca,$castrado,$sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
            $this->castrado = $castrado;
            $this->sexo = $sexo;
        }
        public function latir(){ //Exercício 5
            $nome = $this->nome;
            echo "\nO cachorro $nome está latindo!";
        }
        public function marcarTerritorio() { //Exercício 6
            $nome = $this->nome;
            $raca = $this->raca;
            echo "\nO cachorro $nome da raça $raca está marcando território";
        }
    }
    $dog1 = new Cachorro("Google",6,"Buldogue",true,"Macho");
    $dog1->latir();
    $dog1->marcarTerritorio();
?>
