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
                    foreach($arquivoDados as $nome =>$info){
                        $this->bebidaArray[$nome] = new bebida(
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
        //READ 
        public function lerBebidas() {
            return $this->bebidaArray;
        }
        //UPDATE 
        public function atualizarBebidas($nome,$novoNome,$novoValor,$novaQtde,$novoVolume,$novaCategoria) {
            if (isset($this->bebidaArray[$nome])){
            // 1. Pega todas as chaves em ordem
                $keys = array_keys($this->bebidaArray);

                // 2. Descobre a posição da chave antiga
                $index = array_search($nome, $keys);

                // 3. Cria o novo objeto
                $novaBebida = new Bebida($novoNome, $novaCategoria, $novoVolume, $novoValor, $novaQtde);

                // 4. Troca a chave mantendo a mesma posição
                $keys[$index] = $novoNome;

                // 5. Atualiza o array mantendo ordem
                $this->bebidaArray = array_combine($keys, $this->bebidaArray);

                // 6. Coloca o objeto atualizado na posição certa
                $this->bebidaArray[$novoNome] = $novaBebida;
            }
            $this->salvarArquivo();
        }
        
        //DELETE 
        public function excluirBebida($nome){
            unset($this->bebidaArray[$nome]);
            $this->salvarArquivo();
        }
    }









?>