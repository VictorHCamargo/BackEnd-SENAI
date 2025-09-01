<!-- Pessoa com atributos
Crie uma classe Pessoa com os atributos privados nome, idade e email.
o Utilize os setters para preencher os dados de uma pessoa.
o Em seguida, use os getters para exibir as informações dessa
pessoa em formato de frase, por exemplo:
O nome é Samuel, tem 22 anos e o email é samuel@exemplo.com. -->
<?php
    class people {
        private String $nome;
        private int $idade;
        private String $email;
        public function __construct($nome,$idade,$email) {
            $this->set($nome,$idade,$email);
        }
        public function set($nome,$idade,$email) {
            $this->nome = ucwords(strtolower($nome));
            $this->idade = abs((int)$idade);
            $this->email = preg_replace("/\d/","",strtolower($email));
        }
        public function get() {
            echo "Olá ". $this->nome. ", você tem ". $this->idade. " anos, o seu email é ". $this->email;
        }
    }
    $people1 = new people("VictOR HugO CAMARGO",17,"Teste@teste.com");
    $people1->get();

?>