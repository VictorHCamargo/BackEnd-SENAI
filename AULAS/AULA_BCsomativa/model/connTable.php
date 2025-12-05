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
    public function update($whereField, $whereValue, array $tableFields)
    {
        $filterDates = array_filter($tableFields, fn($dado) => $dado !== null);
        $set = implode(", ", array_map(fn($key) => "$key = :$key", array_keys($filterDates)));

        $sql = "UPDATE {$this->table} SET $set WHERE $whereField = :whereValue";

        $stmt = $this->conn->prepare($sql);

        // Junta os campos do SET com o valor do WHERE
        $params = $filterDates;
        $params['whereValue'] = $whereValue;

        $stmt->execute($params);
    }
    public function selectUnique($column = "",$where = "",$orderBy= "",$groupBy= "", $limit = "",$params = [])
    {
        $sql = "SELECT";
        if($column !== ""){
            $sql .= " {$column}";
        } else {
            $sql .= " *";
        }
        $sql .= " FROM {$this->table}";

        if ($where !== ""){
            $sql .= " WHERE {$where}";
        }
        if ($orderBy !== "") {
            $sql .= " ORDER BY {$orderBy}";
        }
        if ($groupBy !== "") {
            $sql .= " GROUP BY {$groupBy}";
        }
        if ($limit !== "") {
            $sql .= " LIMIT {$limit}";
        }

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}



?>