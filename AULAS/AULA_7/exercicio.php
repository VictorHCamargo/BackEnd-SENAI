<?php
    //Crie uma classe "Moto" com ao menos 4 atributos sem a utilização de um construtor
    class Moto {
        public String $nome;
        public String $marca;
        public String $categoria;
        public String $data_fabricacao;
        public String $data_venda;
        // public bool $revisao;
        public int $ano;
        public int $mes;
        public int $dia;
        public int $idade;
        public String $cpf;
        public String $telefone;
        public String $endereco;
        public String $estado_civic;
        public String $sexo;
        // public function atualizarRevisao($revisaoFeita) {
        //     $this->revisao = $revisaoFeita; // Atribuição de um valor há uma variável global
        //     $nome = $this->nome; //Definição de uma variável local
        //     if($revisaoFeita != false) {
        //         echo "\nA revisão da $nome está em dia";
        //     } else {
        //         echo "\nA revisão da $nome está atrasada, por favor considere realiza-lá";
        //     }
        // }
        // public function __construct($ano,$mes,$dia) {

        // }
        // public function __construct($nome,$idade,$cpf,$telefone,$endereco,$estado_civil,$sexo) {

        // }
        // public function __construct($marca,$nome,$categoria,$data_fabricacao,$data_venda) {

        // }
    }
    //Moto 1
    $moto1 = new Moto();
    $moto1->nome = "SHADOW 700";
    $moto1->marca = "HONDA";
    $moto1->ano = "2016";
    //Moto 2
    $moto2 = new Moto();
    $moto2->nome = "BIZ";
    $moto2->marca = "HONDA";
    $moto2->ano = "2023";
    //Moto 3
    $moto3 = new Moto();
    $moto3->nome = "H2R";
    $moto3->marca = "KAWASHAKI";
    $moto3->ano = "2025";
?>