<?php
    namespace AULAS\AULA_14;

    class produtoDao {
        private $produtos = [];
        private $arquivo = "produtos.json";

        public function __construct() {
            if(file_exists(filename: $this->arquivo)) {
                $conteudo = file_get_contents($this->arquivo);
                $dados = json_decode($conteudo,true);
                if($dados){
                    foreach($dados as $cod => $info){
                        $this->produtos[$cod] = new Produto ($info['codigo'],$info['preco'],$info['nome']);
                    }
                }
            }
        }

        private function salvarArquivo(){
            $dados = [];
            foreach($this->produtos as $codigo => $produto) {
                $dados[$codigo] = [
                    'codigo'=>$produto->getCodigo(),
                    'preco'=>$produto->getPreco(),
                    'nome'=>$produto->getNome()
                ];
            }
            file_put_contents($this->arquivo,json_encode($dados,JSON_PRETTY_PRINT));
        }
        //CREATE
        public function criarProduto(Produto $produto) {
            $this->produtos[$produto->getCodigo()] = $produto;
            $this->salvarArquivo();
        }
        //READ
        public function lerProdutos() {
            return $this->produtos;
        }
        //UPDATE
        public function atualizarProduto(String $codigo, float $novoPreco, String $novoNome) {
            if(isset($this->produtos[$codigo])){
                $this->produtos[$codigo]->setPreco($novoPreco);
                $this->produtos[$codigo]->setNome($novoNome);
            }
            $this->salvarArquivo();
        }
        //DELETE
        public function excluirProduto($codigo){
            unset($this->produtos[$codigo]);
            $this->salvarArquivo();
        }
    }








?>