<?php
    namespace AULAS\AULA_14;
    require_once "produtoDao.php";
    require_once "produto.php";

    $dao = new produtoDao();
    $dao->criarProduto(new produto('001',15.90,"Tomate"));
    $dao->criarProduto(new produto('002',10.90,"Maça"));
    $dao->criarProduto(new produto('003',67.75,"Queijo Brie"));
    $dao->criarProduto(new produto('004',25.90,"Iogurte Grego"));
    $dao->criarProduto(new produto('005',5.90,"Guaraná Jesus"));
    $dao->criarProduto(new produto('006',100.33,"Bolacha Bono"));
    $dao->criarProduto(new produto('007',9.99,"Desisnfetante Urca"));
    $dao->criarProduto(new produto('008',26.19,"Prestobarba bic"));

    echo "\n Atualização de criação";
    foreach ($dao->lerProdutos() as $dados) {
        echo "\n[{$dados->getCodigo()}] - {$dados->getNome()} valor:{$dados->getPreco()};";
    }

    $dao->atualizarProduto("007",9.99,"Desinfetante Barbarex");
    $dao->atualizarProduto("005",4.10,"Guaraná Jesus");
    $dao->atualizarProduto("006",12.75,"Bolacha Bono");
    echo "\n Atualização de Update";
    foreach ($dao->lerProdutos() as $dados) {
        echo "\n[{$dados->getCodigo()}] - {$dados->getNome()} valor:{$dados->getPreco()};";
    }


    $dao->excluirProduto("001");
    $dao->excluirProduto("002");
    
    echo "\n Atualização de Delete";
    foreach ($dao->lerProdutos() as $dados) {
        echo "\n[{$dados->getCodigo()}] - {$dados->getNome()} valor:{$dados->getPreco()};";
    }
?>