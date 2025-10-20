<?php
    namespace AULAS\AULA_13;
    class AlunoDAO {
        // Classe DAO (Data Access Object) para manipulação das funções do CRUD (create,read,update e delete)
        private $alunos = []; // Array $alunos para armazenamento temporário dos objetos a serem manipulados, antes de ser enviado ao banco de dados. Foi criado vazio inicialmente.
        public function criarAluno(Aluno $aluno) { // método para criar um objeto no array alunos --> Create 
            $this->alunos[$aluno->getId()] = $aluno;
        }
        public function lerAlunos() { // método para criar um objeto no array alunos --> Read
            return $this->alunos;
        }
        public function atualizarAluno($id,$novoNome,$novoCurso) {// método para atualizar os dados de um objeto já criado --> Update
            if(isset($this->alunos[$id])){
                $this->alunos[$id]->setCurso($novoCurso);
                $this->alunos[$id]->setNome($novoNome);
            }
        }
        public function excluirAluno($id) {// método para excluir um objeto --> delete'     
            unset($this->alunos[$id]);
        }
    }
?>