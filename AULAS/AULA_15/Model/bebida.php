<?php
namespace AULAS\AULA_15;
class bebida {
    private int $id;

    private String $nome;
    

    private String $categoria;
    

    private int $volume;
    

    
    private int $qtde;
    

    private float $valor;

    public function __construct($nome, $categoria, $volume, $qtde, $valor)
    {
        $this->setNome($nome);
        $this->setCategoria($categoria);
        $this->setVolume($volume);
        $this->setQtde($qtde);
        $this->setValor($valor);
    }
    public function getNome() {
        return $this->nome;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVolume() {
        return $this->volume;
    }
    public function getQtde() {
        return $this->qtde;
    }
    public function getValor() {
        return $this->valor;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    public function setVolume($volume) {
        $this->volume = $volume;
    }
    public function setValor($valor) {
        $this->valor = $valor;
    }
    public function setQtde($qtde) {
        $this->qtde = $qtde;
    }

}









?>