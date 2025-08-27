<?php
    class Pessoa {
        private String $nome;
        private String $cpf;
        private String $telefone;
        private int $idade;
        private String $email;
        private String $senha;
        // Crie o constructor para a classe Pessoa.
        public function __construct($nome,$cpf,$telefone,$idade,$email,$senha) {
            $this->setNome($nome);
            $this->setCpf($cpf);
            $this->setTelefone($telefone);
            $this->setIdade($idade);
            $this->email = $email;
            $this->senha = $senha;
        }
        //Setter para $nome
        public function setNome($nome){
            //ucwords = deixa as inicias em maisúsculas
            //strtolower = deixa todas letras em minúsculos
            $this->nome = ucwords(strtolower($nome));
        }
        //Setter para $cpf
        public function setCpf($cpf){
            // o /\D/ pega todos os digitos da String que não são chars
            // o /\d/ pega todos os digitos da String que são chars
            $this->cpf = preg_replace('/\D/','',$cpf);
        }
        public function setTelefone($telefone){
            $this->telefone = preg_replace('/\D/','',$telefone);
        }
        public function setIdade($idade){
            $this->idade = abs((int)$idade);
        }
        public function exibirDados(){
            $nome = $this->nome;
            $cpf = $this->cpf;
            $telefone = $this->telefone;
            $idade = $this->idade;
            echo "Nome do aluno: $nome\n
            CPF: $cpf\n
            Telefone: $telefone\n
            Idade: $idade\n
            Email: ".$this->email. "\nSenha: ".$this->senha;
        }
    }
    
    $people1 = new Pessoa("VICtOr HuGo camargo","111.111.111-22","(11)99899-9999",-11,"teste@email.com","1234");
    $people1->exibirDados();
?>