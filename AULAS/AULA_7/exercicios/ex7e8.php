<!-- Exercício 7:
Crie um método para a classe 'Usuários' chamado de 'Testando Reservista' no qual
testa se o usuário é homem e caso sim exiba uma mensagem "Apresente seu
certificado de reservista do tiro de guerra!", caso não, exiba uma mensagem "Tudo
certo". -->


 <!-- Exercício 8:
Crie um método para a classe 'Usuários' chamado de 'Casamento' que teste se o
estado civil é igual a 'Casado' e caso sim exiba a mensagem "Parabéns pelo seu
casamento de $anos_casado anos!" e caso não, exiba uma mensagem de "oloco". O
valor de anos de casamento será informado na hora de chamar o método para o
objeto em específico. -->

<?php
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
        public function testandoReservista(){
            if($this->sexo != "homem") {
                echo "\nTudo certo";
            } else {
                echo "\npresente seu certificado de reservista do tiro de guerra!";
            }
        }
        public function casamento($anos_casado = 0) {
            if ($this->estadocivil != "Casado") {
                echo "\nOloco";
            } else {
                echo "\nParabéns pelo seu casamento de $anos_casado anos!";
            }
        }
    }
    $pessoa1 = new Usuario(
        "Josenildo Afonso Souza",
        "100.200.300-40",
        "homem",
        "josenewdo.souza@gmail.com",
        "Casado",
        "Xique-Xique",
        "Bahia",
        "Rua da amizade, 99",
        "40123-98"
    );
    $pessoa1->testandoReservista();
    $pessoa1->casamento(25);
    $pessoa2 = new Usuario(
        "Valentina Passos Scherrer",
        "070.070.060-70",
        "mulher",
        "scherrer.valen@outlook.com",
        "Divorciada",
        "Iracemápolis",
        "São Paulo",
        "Avenida da saudade, 1942",
        "23456-24"
    );
    $pessoa2->testandoReservista();
    $pessoa2->casamento();
    $pessoa3 = new Usuario(
        "Claudio Braz Nepumoceno",
        "575.575.242-32",
        "homem",
        "Clauclau.nepumoceno@gmail.com",
        "Solteiro",
        "Piripiri",
        "Piauí",
        "Estrada 3, 33",
        "12345-99"
    );
    $pessoa3->testandoReservista();
    $pessoa3->casamento();
?>