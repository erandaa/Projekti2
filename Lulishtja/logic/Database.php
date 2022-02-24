<?php

class DatabaseConfig{
    private $connection;
    private $host = "localhost";
    private $dbname = "lulishtja";

    protected function getConnetion(){
        $this->createConnection();
        return $this->conneciton;
    }
    private function createConnection (){
        try{
            $this-> connetion = new PDO("mysql:host=$this->host;dbname=$this->dbname","root","");
        }
        catch(PDOException $e){
            print "Error: " . $e->getMessage(). "<br/>";
            die()
        }
    }
}

?>h