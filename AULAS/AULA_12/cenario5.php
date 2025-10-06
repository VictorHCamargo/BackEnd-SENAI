<!-- Cenário 5 – Analise o problema com linguagem natural
"Um sistema de biblioteca deve permitir que usuários (alunos e professores)
façam empréstimos de livros e revistas." -->

<?php
    abstract class Usuarios {
        private String $tipoProduto;
        private String $nome;
        public function __construct($nome,$tipoProduto){
            $this->setTipo($tipoProduto);
            $this->setNome($nome);
        }
        public function setTipo($tipo){
            $this->tipoProduto = strtolower($tipo);
        }
        public function getTipo() {
            return $this->tipoProduto;
        }
        public function setNome($nome){
            $this->nome = ucwords(strtolower($nome));
        }
        public function getNome() {
            return $this->nome;
        }
        public function fazerEmprestimos() {
            if ($this->getTipo() == "livros") {
                echo $this->getNome() . " Está emprestando um livro";
            } elseif($this->getTipo() == "revistas") {
                echo $this->getNome() . " Está emprestando uma revista";
            } else {
                echo "Não há esse tipo de produto";
            }
        }
    }
    class Alunos extends Usuarios {
        public function __construct($nome, $tipoProduto) {
            parent::__construct($nome,$tipoProduto);
        }
    }
    class Professores extends Usuarios {
        public function __construct($nome,$tipoProduto) {
            parent::__construct($nome,$tipoProduto);
        }
    }

    //Usuarios e alunos é uma composição
    //Usuarios e professores é uma composição
    //Alunos e professores é uma associação
?>