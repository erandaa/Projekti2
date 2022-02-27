<?php

class DatabaseConfig {
    private $connection;
    private $host = "localhost";
    private $user = "root";
    private $dbname = "lulishjta";

    public function getConnection(){
        $this->createConnection();
        return $this->connection;
    }

    private function createConnection(){
        try {
            
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", "user=$this->user", "");
            echo "good";
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
}
?>