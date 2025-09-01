<?php 
    // Encapsulamento de Produto
    // Crie uma classe Produto com os atributos privados nome, preco e
    // estoque.
    // o Implemente os setters e getters.
    // o Faça um objeto da classe e use os setters para definir os
    // valores.
    // o Exiba com os getters uma frase como:
    // O produto X custa R$ Y e possui Z unidades em estoque.
    class produto {
        private String $nome;
        private float $preco;
        private int $estoque;
        public function __construct($nome,$preco,$estoque) {
            $this->set($nome,$preco,$estoque);
        }
        public function set($nome,$preco,$estoque) {
            $this->nome = ucwords(strtolower($nome));
            $this->preco = $preco;
            $this->estoque = abs((int)$estoque);
        }
        public function get() {
            echo "O produto {$this->nome} custa R$ {$this->preco} e possui {$this->estoque} unidades em estoque.";
        }
    }
    $produto1 = new produto("Sabonete",25.90,200);
    $produto1->get();
?>