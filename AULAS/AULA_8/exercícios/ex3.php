<?php
// Validação em setter
// Crie uma classe Aluno com os atributos privados nome e nota.
// o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
// valor for inválido, armazene 0.
// o Teste criando alunos com notas válidas e inválidas, exibindo os
// resultados com getNota().

    class Aluno {
        private String $nome;
        private float $nota;
        public function __construct($nome,$nota) {
            $this->setNome($nome);
            $this->setNota($nota);
        }
        public function setNome($nome) {
            return $this->nome = ucwords(strtolower($nome));
        }
        public function setNota($nota){
            if ($nota > 10 || $nota < 0) {
                $this->nota = 0;
            } else {
                $this->nota = $nota;
            }
        }
        public function get() {
            echo "\nA nota do aluno {$this->nome} foi de {$this->nota}";
        }
    }
    $aluno1 = new Aluno("Victor HUGO CAMARGO", 10);
    $aluno2 = new Aluno("Henrique RODRIGUes Motta",10.96);
    $aluno1->get();
    $aluno2->get();
?>