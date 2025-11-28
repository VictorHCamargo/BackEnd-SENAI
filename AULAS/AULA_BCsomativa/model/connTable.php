<?php
namespace AULAS\AULA_BCsomativa;
use PDO;
require_once "connection.php";
require_once "valorTables.php";
class connTable{
    private String $table;
    private $conn;

    public function __construct($table)
    {
        $this->table = $table;
        $this->conn = Connection::getInstacia();
    }

    public function select(){
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(array $tableFields){
        $filterDates = array_filter($tableFields,fn($dado) => $dado !== null);
        $fields = implode(",", array_keys($filterDates));
        $placeholders = ":" . implode(",:", array_keys($filterDates));
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} ({$fields}) VALUES ( {$placeholders }) ");
        $stmt->execute($filterDates);
    }
    public function delete(array $tableFields, $whereField){
        $filterDates = array_filter($tableFields, fn($dado) => $dado !== null);
        $placeholders = ":" . implode(",:", array_keys($filterDates));
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE $whereField = {$placeholders} ");
        $stmt->execute($filterDates);
    }
    public function update($whereField,$whereValue, array $tableFields){
        $tableFields['whereValue'] = $whereValue;
        $filterDates = array_filter($tableFields,fn($dado) => $dado !== null);
        $set = implode(", ", array_map(fn($dado) => "$dado = :$dado", array_keys($filterDates)));
        
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET $set WHERE $whereField = :whereValue");
        $stmt->execute($tableFields);
    }
}



?>