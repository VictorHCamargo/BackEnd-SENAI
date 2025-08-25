<?php
    //Crie uma Classe (molde de objetos) chamada "Cachoro" com os seguintes atributos:
    //Nome, idade, raça, castrado e sexo.
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
    }
    //Exercício 2: Após a criação da classe, crie 10 cachorros (10 objetos)
    $dog1 = new Cachorro("Google",6,"Buldogue",true,"Macho");
    $dog2 = new Cachorro("Linux",8,"Poodle",false,"Fêmea");
    $dog3 = new Cachorro("Windows",10,"Pastor-alemão",true,"Macho");
    $dog4 = new Cachorro("Chocho",12,"Chihuahua",false,"Fêmea");
    $dog5 = new Cachorro("Batman",6,"Labrador Retriever",false,"Macho");
    $dog6 = new Cachorro("Robin",4,"Dachshund",true,"Fêmea");
    $dog7 = new Cachorro("BMW",6,"Buldogue francês",true,"Fêmea");
    $dog8 = new Cachorro("Amedoin",8,"Buldogue",true,"Macho");
    $dog9 = new Cachorro("Theo",3,"pug",true,"Macho");
    $dog10 = new Cachorro("Cacau",6,"Shih Tzu",true,"Fêmea");

    // Exercício 3:
    // Após a conclusão dos exercícios 1 e 2, crie uma classe chamada 'Usuario' com os
    // atributos: Nome, CPF, Sexo, Email, Estado civil, Cidade, Estado, Endereco e CEP.
    class Usuario {
        public String $nome;
        public String $cpf;
        public String $sexo;
        public String $email;
        public String $estadocivil;
        public String $cidade;
        public String $estado;
        public String $endereco;
        public String $cep;
        public function __construct($nome,$cpf,$sexo,$email,$estadocivil,$cidade,$estado,$endereco,$cep) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->sexo = $sexo;
            $this->email = $email;
            $this->estadocivil = $estadocivil;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->endereco = $endereco;
            $this->cep = $cep;
        }
    }
    // Exercício 4:
    // Crie 3 objetos utilizando a classe do exercício 3, seguindo as seguintes
    // informações:
    $usuario1 = new Usuario(
        "Josenildo Afonso Souza",
        "100.200.300-40",
        "Masculino",
        "josenewdo.souza@gmail.com",
        "Casado",
        "Xique-Xique",
        "Bahia",
        "Rua da amizade, 99",
        "40123-98"
);
    $usuario2 = new Usuario(
        "Valentina Passos Scherrer",
        "070.070.060-70",
        "Feminino",
        "scherrer.valen@outlook.com",
        "Divorciada",
        "Iracemápolis",
        "São Paulo",
        "Avenida da saudade, 1942",
        "23456-24"
    );
    $usuario3 = new Usuario(
        "Claudio Braz Nepumoceno",
        "575.575.242-32",
        "Masculino",
        "Clauclau.nepumoceno@gmail.com",
        "Solteiro",
        "Piripiri",
        "Piauí",
        "Estrada 3, 33",
        "12345-99"
    );
?>