<?php
    // Alteração de dados
    // Crie uma classe Funcionario com os atributos privados nome e salario.
    // o Crie métodos setNome, getNome, setSalario e getSalario.
    // o Defina os valores de um funcionário com os setters.
    // o Depois, altere o nome e o salário usando novamente os
    // setters.
    // o Mostre, com os getters, que os valores realmente foram
    // modificados.
    class funcionario {
        private String $nome;
        private float $salario;
        public function __construct($nome,$salario) {
            $this->setNome($nome);
            $this->setSalario($salario);
        }
        public function setNome($nome) {
            $this->nome = ucwords(strtolower($nome));
        }
        public function setSalario($salario) {
            $this->salario = abs($salario);
        }
        public function get(){
            echo "\nO funcionário {$this->nome} recebe R$ {$this->salario} de salário";
        }
    }
    $funcionario = new funcionario("Victor Hugo CAMARGO", 2450.90);
    $funcionario->get();
    $funcionario->setNome("henrique RodrIGUES MOTTA");
    $funcionario->setSalario(7589.98);
    $funcionario->get();
?>