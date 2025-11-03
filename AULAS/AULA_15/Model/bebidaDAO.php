<?php
namespace AULAS\AULA_15;
    class bebidaDAO {
        private $bebidaArray = [];
        private String $arquivoBebida = "bebidas.json";
        
        public function __construct() {
            if(file_exists($this->arquivoBebida)) {
                $conteudoArquivo = file_get_contents($this->arquivoBebida);
                $arquivoDados = json_decode($conteudoArquivo,true);
                if($arquivoDados) {
                    foreach($arquivoDados as $id =>$info){
                        $this->bebidaArray[$id] = new bebida(
                            $info['nome'],
                            $info['categoria'],
                            $info['volume'],
                            $info['qtde'],
                            $info['valor']
                        );
                    }
                }
                
            }
        }

        private function salvarArquivo() {
            $dadosSalvar = [];
            foreach($this->bebidaArray as $nome => $bebida) {
                $dadosSalvar[$nome] = [
                    'nome' => $bebida->getNome(),
                    'categoria' => $bebida->getCategoria(),
                    'volume' => $bebida->getVolume(),
                    'valor' => $bebida->getValor(),
                    'qtde' => $bebida->getQtde(),
                ];
            }
            file_put_contents($this->arquivoBebida,json_encode($dadosSalvar,JSON_PRETTY_PRINT));
        }
        //CREATE
        public function criarBebidas(bebida $bebida) {
            $this->bebidaArray[$bebida->getNome()] = $bebida;
            $this->salvarArquivo();
        }
        //UPDATE 
        public function atualizarBebidas($nome,$novoValor,$novoQtde) {
            if(isset($this->bebidaArray[$nome])) {
                $this->bebidaArray[$nome]->setValor($novoValor);
                $this->bebidaArray[$nome]->setQtde($novoQtde);
            }
            $this->salvarArquivo();
        }
        //READ 
        public function lerBebidas() {
            return $this->bebidaArray;
        }
        //DELETE 
        public function excluirBebida($nome){
            unset($this->bebidaArray[$nome]);
            $this->salvarArquivo();
        }
    }









?>