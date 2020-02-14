<?php
    class ConnectionFactory{
        const servername = "localhost";
        const dbname = "projeto_4Vets";
        const username = "root";
        const password = "";

        public static function getConnection(){
            try {
                $connection = new PDO("mysql:host=" .self::servername. "; dbname=" .self::dbname, self::username, self::password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connection;
            } catch (PDOException $e) {
                die("Erro: <code>" .$e->getMessage(). "</code>");
            }
        }
    }
?>