<?php
    namespace AULAS\AULA_13;
    class Aluno {
        private int $id;
        private String $nome;
        private String $curso;
        public function __construct($id,$nome,$curso) {
            $this->setId($id);
            $this->setNome($nome);
            $this->setCurso($curso);
        }


        public function setId($id) {
            $this->id = abs($id);
        }
        public function setNome($nome) {
            $this->nome = ucwords($nome);
        }
        public function setCurso($curso) {
            $this->curso = strtolower($curso);
        }
        public function getId() {
            return $this->id;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getCurso() {
            return $this->curso;
        }

    }

   
?>