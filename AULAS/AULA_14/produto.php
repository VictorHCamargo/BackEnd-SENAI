<?php
    namespace AULAS\AULA_14;
    class Produto {
        private String $codigo;
        private float $preco;
        private String $nome;
        public function __construct($codigo,$preco,$nome){
            $this->setCodigo($codigo);
            $this->setPreco($preco);
            $this->setNome($nome);
        }
        public function setCodigo($codigo)  {
            $this->codigo = strtolower($codigo);
        }
        public function setPreco($preco)  {
            $this->preco = abs($preco);
        }
        public function setNome($nome)  {
            $this->nome = ucwords(strtolower($nome));
        }
        public function getCodigo() {
            return $this->codigo;
        }
        public function getPreco() {
            return $this->preco;
        }
        public function getNome() {
            return $this->nome;
        }
    }






?>