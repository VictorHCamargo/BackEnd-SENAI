<?php
namespace AULAS\AULA_17;
require_once __DIR__ . "\\connection.php";
use PDO;

class livroDao {
    public $conn;
    public function __construct(){
        $this->conn = Connection::getInstance();

        $this->conn->exec("
        CREATE TABLE IF NOT EXISTS livros (
            id_livro int not null auto_increment primary key,
            nome_livro varchar(128) not null,
            nome_autor varchar(128) not null,
            genero varchar(64) not null,
            editora varchar(128) not null,
            ano int not null
        );");
    }
    public function criarLivros(Livro $livros){
        $stmt = $this->conn->prepare("
        INSERT INTO livros (nome_livro,nome_autor,genero,editora,ano)
        VALUES (:nome_livro,:nome_autor,:genero,:editora,:ano");
        $stmt->execute([
            ':nome_livro'=>$livros->getLivro(),
            ':nome_autor'=>$livros->getAutor(),
            ':genero'=>$livros->getGenero(),
            ':editora'=>$livros->getEditora(),
            ':ano'=>$livros->getAno()
        ]);
    }
    public function lerLivros(){
        $stmt = $this->conn->prepare("SELECT * FROM livros");
        $dados = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $dados[]= new Livro(
                $row['nome_livro'],
                $row['nome_autor'],
                $row['genero'],
                $row['editora'],
                $row['ano']
            );
        }
        return $dados;
    }

    public function atualizarLivros($novoLivro,$novoAutor,$novoGenero,$novoEditora,$novoAno) {
        $stmt = $this->conn->prepare("
        UPDATE livros
        SET nome_livro = :livro, nome_autor = :autor,genero = :genero,editora = :editora, ano = :ano
        WHERE nome_livro = :livro_original");
        $stmt->execute([
            ':livro'=>$novoLivro,
            ':autor'=>$novoAutor,
            ':genero'=>$novoGenero,
            ':editora'=>$novoEditora,
            ':ano'=>$novoAno
        ]);
    }
    public function excluirLivro($livro){
        $stmt = $this->conn->prepare("DELETE FROM livros WHERE nome_livro = :livro");
        $stmt->execute([
            ':livro' => $livro
        ]);
    }
    public function buscarNome($livro) {
        $stmt = $this->conn->prepare("SELECT * FROM livros WHERE nome_livro = :livro");
        $stmt->execute([
            'livro'=> $livro
        ]);
        $return = $stmt->fetch(PDO::FETCH_ASSOC);
        if($return){
            return new Livro(
                $return['nome_livro'],
                $return['nome_autor'],
                $return['genero'],
                $return['editora'],
                $return['ano'],
            );
        }
        return null;
    }
}


?>