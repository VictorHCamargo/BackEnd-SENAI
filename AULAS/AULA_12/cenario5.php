<!-- Cenário 5 – Analise o problema com linguagem natural
"Um sistema de biblioteca deve permitir que usuários (alunos e professores)
façam empréstimos de livros e revistas." -->

<?php

    abstract class Usuarios {
        public function fazerEmprestimos($tipo, $tipoUsuario ) {
            if (strtolower($tipo) == "livros") {
                echo $tipoUsuario . " Está emprestando um livro";
            } elseif(strtolower($tipo) == "revistas") {
                echo $tipoUsuario . " Está emprestando uma revista";
            } else {
                echo "Não há esse tipo de produto";
            }
        }
    }
    class Alunos extends Usuarios {
        public function __construct($nome,$tipoProduto) {
            $this->fazerEmprestimos($tipoProduto,$nome);
        }
    }
    class Professores extends Usuarios {
        public function __construct($nome,$tipoProduto) {
            $this->fazerEmprestimos($tipoProduto,$nome);
        }
    }

    $aluno1 = new Alunos("Victor","Revistas");
    
?>