<?php
    class Produtos {
        //Criando classe
        public String $nome;
        public String $categoria;
        public String $fornecedor;
        public int $qtde_estoque;
        public function atualizarEstoque($qtde_vendida) {
            $this->qtde_estoque -= $qtde_vendida;
            return $this->qtde_estoque;
        }
        // public function __construct($nome,$categoria,$fornecedor,$qtde_estoque){
        //     $this->nome = $nome;
        //     $this->categoria = $categoria;
        //     $this->fornecedor = $fornecedor;
        //     $this->qtde_estoque = $qtde_estoque;
        // }
        public function exibirDados() {
            $nome = $this->nome;
            $categoria = $this->categoria;
            $fornecedor = $this->fornecedor;
            $qtde_estoque = $this->qtde_estoque;
            echo "\nO $nome tem disponível em estoque: $qtde_estoque, foi distribuido pela $fornecedor e pertence a categoria: $categoria";
        }
    }
    //Criando objetos com construtor definido:
    //produto 1
    // $produto1 = new Produtos("Suco Tang","Bebidas","Mondelez",200);

    //produto 2
    // $produto2 = new Produtos("Energético Monster","Bebidas","Coca-cola",200);

    //metodos
    // $produto1->exibirDados();
    //Criando objetos sem construtor definido:
    //produto 1
    $produto1 = new Produtos();
    $produto1->nome = "Suco Tang";
    $produto1->categoria = "Bebidas";
    $produto1->fornecedor = "Mondelez";
    $produto1->qtde_estoque = 200;
    

    //produto 2
    $produto2 = new Produtos();
    $produto2->nome = "Energético Monster";
    $produto2->categoria = "Bebidas";
    $produto2->fornecedor = "Coca-cola";
    $produto2->qtde_estoque = 150;

    //metodos
    $produto1->atualizarEstoque(10);
    echo "\nO produto 1 tem a quantidade atual de estoque de: $produto1->qtde_estoque produtos";
    $produto1->exibirDados();
    $produto2->atualizarEstoque(20);
    echo "\nO produto 2 tem a quantidade atual de estoque de: $produto2->qtde_estoque produtos";
    $produto2->exibirDados();
?>