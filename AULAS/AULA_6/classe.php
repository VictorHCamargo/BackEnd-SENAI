<?php
    class Carro { //Criando uma Classe
        public String $marca; //Criando um atributo da classe
        public String $modelo; //Criando um atributo da classe
        public int $ano; //Criando um atributo da classe
        public bool $revisao; //Criando um atributo da classe
        public int $N_donos; //Criando um atributo da classe
        public function __construct($marca,$modelo,$ano,$revisao,$N_donos) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->revisao = $revisao;
            $this->N_donos = $N_donos;
        }
    }
    $carro1 = new Carro("Porsche","911",2020,false,3);
    $carro2 = new Carro("Mitsubishi","Lancer",1945,true,1);
    //Exercício 1: Criar 4 objetos para a classe Carro
    $carro3 = new Carro("BMW","M3",2010,false,3);
    $carro4 = new Carro("Audi","Q3",2018,true,5);
    $carro5 = new Carro("Lamborghini","Veneno",2013,false,1);
    $carro6 = new Carro("FIAT","Idea",2011,true,4);
?>