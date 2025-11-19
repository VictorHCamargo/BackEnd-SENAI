<?php
namespace AULAS\AULA_17;
class Livro {
    private String $livro;
    private String $autor;
    private String $genero;
    private String $editora;
    private int $ano;

    public function __construct($livro,$autor,$genero,$editora,$ano){
        $this->setLivro($livro);
        $this->setAutor($autor);
        $this->setGenero($genero);
        $this->setEditora($editora);
        $this->setAno($ano);
    }
    public function setLivro($livro){
        $this->livro = $livro;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function setEditora($editora){
        $this->editora = $editora;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getLivro(){
        return $this->livro;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getEditora(){
        return $this->editora;
    }
    public function getAno(){
        return $this->ano;
    }
}










?>