<?php
    namespace AULAS\AULA_13;
    class AlunoDAO {
        // Classe DAO (Data Access Object) para manipulação das funções do CRUD (create,read,update e delete)
        private $alunos = []; // Array $alunos para armazenamento temporário dos objetos a serem manipulados, antes de ser enviado ao banco de dados. Foi criado vazio inicialmente.
        private $arquivo = "alunos.json"; // Cria o arquivo JSON para que os dados sejam armazenados
        // Construtor AlunoDAO --> carrega os dados do arquivo json ao iniciar a aplicação
        
        public function __construct() {
            if (file_exists($this->arquivo)) {
                //Lê o conteudo do arquivo caso ele já exista
                $conteudo = file_get_contents($this->arquivo);
                // Atribui as informações do arquivo existente à variavel $conteudo

                $dados = json_decode($conteudo,true); // converte o JSON em um array associativo
                if ($dados) {
                    //verifica se o array é nulo ou falso, caso seja valido e contenha conteúdo, ele prossegue para lógica dentro do if
                    foreach ($dados as $id => $info) {
                        //percorre o array i$dados relacionando chave e valor
                        $this->alunos[$id] = new Aluno(//cria um novo objeto já com as chaves e os valores associados
                            $info['id'],$info['nome'],$info['curso']);
                    }
                }
            }
        }
        //metodo auxiliar --> para salvar o array $alunos no arquivo JSON
        private function salvarArquivo(){
            $dados = [];
            //Transforma os objetos em arrays convecionais
            foreach ($this->alunos as $id => $aluno) {
                $dados[$id] = [
                    'id'=>$aluno->getId(),
                    'nome'=>$aluno->getNome(),
                    'curso'=>$aluno->getCurso()
                ];
            }
            file_put_contents($this->arquivo,json_encode($dados,JSON_PRETTY_PRINT));
        }
        public function criarAluno(Aluno $aluno) { // método para criar um objeto no array alunos --> Create 
            $this->alunos[$aluno->getId()] = $aluno;
            $this->salvarArquivo();
        }
        public function lerAlunos() { // método para criar um objeto no array alunos --> Read
            return $this->alunos;
        }
        public function atualizarAluno($id,$novoNome,$novoCurso) {// método para atualizar os dados de um objeto já criado --> Update
            if(isset($this->alunos[$id])){
                $this->alunos[$id]->setCurso($novoCurso);
                $this->alunos[$id]->setNome($novoNome);
            }
            $this->salvarArquivo();
        }
        public function excluirAluno($id) {// método para excluir um objeto --> delete'     
            unset($this->alunos[$id]);
            $this->salvarArquivo();
        }
    }
?>