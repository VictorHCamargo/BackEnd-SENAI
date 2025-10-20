<?php
    namespace AULAS\AULA_13;
    require_once "crud.php";
    require_once "AlunoDAO.php";


    $dao = new AlunoDAO(); // Objeto da classe aluno DAO para testar métodos CRUD
    //CREATE
    $aluno1 = new Aluno(1,"Victor","Soldagem");
    $aluno2 = new Aluno(2,"Luiza","Marketing Digital");
    $aluno3 = new Aluno(3,"Redondo","Eletroeletrônica");
    $dao->criarAluno($aluno1);
    $dao->criarAluno($aluno2);
    $dao->criarAluno($aluno3);
    //Read
    echo "\nListagem inicial\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }

    //UPDATE
    $dao->atualizarAluno(1,"Victor Hugo Camargo","JAVA");
    echo "\nApós atualização\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }
    //DELETE
    $dao->excluirAluno(1);
    
    echo "\nApós exclusão\n";
    foreach ($dao->lerAlunos() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }



?>