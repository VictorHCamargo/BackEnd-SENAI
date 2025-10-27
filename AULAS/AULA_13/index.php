<?php
    namespace AULAS\AULA_13;
    require_once "crud.php";
    require_once "AlunoDAO.php";


    $dao = new AlunoDAO(); // Objeto da classe aluno DAO para testar métodos CRUD
    //CREATE
    $dao->criarAluno(new Aluno(1,"Victor","Soldagem"));
    $dao->criarAluno(new Aluno(2,"Luiza","Marketing Digital"));
    $dao->criarAluno(new Aluno(3,"Aurora","Arquitetura"));
    $dao->criarAluno(new Aluno(4,"Oliver","Gestão"));
    $dao->criarAluno(new Aluno(5,"Amanda","Luta"));
    $dao->criarAluno(new Aluno(6,"Geysa","Engenharia"));
    $dao->criarAluno(new Aluno(7,"Joab","Eletrica"));
    $dao->criarAluno(new Aluno(8,"Miguel","Streamer"));
    $dao->criarAluno(new Aluno(9,"Redondo","Eletroeletrônica"));
    //Read
    echo "\nListagem inicial\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }

    //UPDATE
    $dao->atualizarAluno(1,"Victor Hugo Camargo","JAVA");
    $dao->atualizarAluno(6,"Clotilde","Engenharia");
    $dao->atualizarAluno(7,"Joana","Eletrica");
    $dao->atualizarAluno(8,"Miguel","Designer");
    $dao->atualizarAluno(5,"Amanda","Logistica");
    $dao->atualizarAluno(4,"Oliver","Eletrica");
    echo "\nApós atualização\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }
    //DELETE
    $dao->excluirAluno(1);
    $dao->excluirAluno(6);
    $dao->excluirAluno(3);
    
    echo "\nApós exclusão\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }



?>