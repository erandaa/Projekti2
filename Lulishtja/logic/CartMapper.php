<?php

require_once "Database.php";

class CartMapper extends DatabaseConfig{
    private $connection; 
    private $query;

    public function __construct(){
        $this->connection = $this->getConnection();
    }

    public function insetToCart($user_id,$product_id){
        $this->qurey = "insert into cart (user_id,product_id) values (:user_id, :product_id)";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":product_id",$product_id);
        $statement->bindParam(":user_id",$user_id);
        $statement->execute(); 
    }
    public function getCart(){
        $this->query ="select *from cart";
        $statement=$this->connection->prepare($this->query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCartId(){
        $this->query="select id from cart where id = (SELECT id FROM user WHERE email = '".$_SESSION['email']."')";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCartProducts($user_id){
        $this->query = "select * from cart where user_id=:user_id";
        $statement= $this->connection ->prepare($this->query);
        $statement->bindParam(":user_id",$user_id);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function deleteProductFromCart($product_id){
        $this->query= "delete from cart where product_id=:product_id";
        $statement =$this->connection ->prepare($this->query);
        $statement->bindParam(":product_id",$product_id);
        $statement->execute();
    }
    public function deleteUserCart($user_id){
        $this->query= "delete from cart where user_id=:user_id";
        $statement =$this->connection ->prepare($this->query);
        $statement->bindParam(":user_id",$user_id);
        $statement->execute();
    }


    
}






?>