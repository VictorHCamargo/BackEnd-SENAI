<?php
namespace AULAS\AULA_BCsomativa;
use PDO;
use PDOException;

class Connection {
    private static $instancia = null;

    public static function getInstacia(){
        try {
            if(!self::$instancia) {
                $host = 'localhost';
                $db = 'oficinaMecanica';
                $pass = 'senaisp';
                $user = 'root';

                $dsn_server = "mysql:host=$host;dbname=$db;charset=utf8";

                self::$instancia = new PDO(
                    $dsn_server,
                    $user,
                    $pass
                );


                self::$instancia->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                

            }
            
        } catch (PDOException $e){
            die("ERROR:". $e->getMessage());
        }
        return self::$instancia;
    }
}






?>