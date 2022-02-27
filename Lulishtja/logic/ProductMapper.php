<?php
require_once "Database.php";

class ProductMapper extends DatabaseConfig{
    private $conenction;
    private $query;

    public function __construct(){
        $this->connection=$this->getConnection();
    }
    public function insertProduct($product){
        $this->query="insert into products (emri,cmimi,pershkrimi,sasia,kategoria,image,admin_id,prodhuesi) 
        values(:emri,:cmimi,:pershkrimi,:sasia,:kategoria,:image,:admin_id,:prodhuesi)";
        $statement = $this->conneciton->prepare($this->query);
        $emri=$product->getEmri();
        $cmimi=$product->getCmimi();
        $pershkrimi=$product->getPershkrimi();
        $sasia=$product->getSasia();
        $kategoria=$product->getKategoria();
        $image=$product->getImage();
        $admin=$product->getAdminId();
        $prodhuesi=$product->getProdhuesi();
        $statement->bindParam(":emri",$emri);
        $statement->bindParam(":cmimi",$cmimi);
        $statement->bindParam(":pershkrimi",$pershkrimi);
        $statement->bindParam(":sasia",$sasia);
        $statement->bindParam(":kategoria",$kategoria);
        $statement->bindParam(":image",$image);
        $statement->bindParam(":admin_id",$admin);
        $statement->bindParam(":prodhuesi",$prodhuesi);
        $statement->execute();
        return true;
    }
    public function getAllProducts(){
        $this->query = "select * from products order by id desc";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getRecentProducts(){
        $this->query="select * from (select * from products order by id desc limit 8)var1 order by id desc";
        $statement = $this->connection-> prepare ($this->query);
        $statement->execute();
        $result= $statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductByCategory($kategoria, $id){
        $this->query="select * from (select *from products where kategoria=:kategoria and id!=id order by desc limit 3) var1 order by id asc ";
        $statement= $this->connection->prepare($this->query);
        $statement-> bindParam(":kategoria",$kategoria);
        $statement-> bindParam(":id",$id);
        $statement->execute();
        $result= $statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductById($id){
        $this->query="select *from products where id=:id";
        $statement= $this->conection ->prepare ($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPriceLowToHigh(){
        $this->query="select *from products order by cmimi asc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPriceHighToLow(){
        $this->query="select *from products order by cmimi desc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getNameAtoZ(){
        $this->query="select * from product order ermi asc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getNameZtoA(){
        $this->query="select * from product order ermi desc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getNewest(){
        $this->query="select * from product order by id desc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getOldest(){
        $this->query="select * from product order by id asc";
        $statement= $this->conection ->prepare ($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function deleteProducts($id){
        $this->query="delete from products where id:=id";
        $statement= $this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
    public function updateProduct($id,$emri,$cmimi,$pershkrimi,$sasia,$kategoria){
        $this->query = "update products set emri=:emri,cmimi=:cmimi,pershkrimi=;desc,sasia=:qty,katergoria=:kategoria where id=:id";
        $statement= $this->connection->prepare($this->query);
        $statement->bindParam(":emri",$emri);
        $statement->bindParam(":cmimi",$cmimi);
        $statement->bindParam(":pershkrimi",$pershkrimi);
        $statement->bindParam(":sasia",$sasia);
        $statement->bindParam(":kategoria",$kategoria);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
    public function getAllCategories(){
        $this->query="select * from categories";
        $statement =$this->connection->preare($this->query);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCategorisExcept($catName){
        $this->query= "select * from categories where emri!=:emri";
        $statement=$this -> connection->prepare($this->query);
        $statement->binParam(":emri",$catName);
        $statement->execute();
        $result=$statement->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertCategories($kategoria){
        $this->query ="insert into categories (emri) values(:kategoria)";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":kategoria",$kategoria);
        $statement->execute();
    }
    public function deletefromCategories($id){
        $this->query ="delete from categories where emri=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
    public function deleteProductWithCategory($category){
        $this->query ="delete from products where kategoria=:category";
        $statement= $this->connection->prepare($this->query);
        $statement->bindParam(":category",$category);
        $statement->execute();
    }
    public function insertIntoSlider($image){
        $this->query ="insert into slider (image) values (:image)";
        $statement= $this->connection->prepare($this->query);
        $statement->bindParam(":image",$image);
        $statement->execute(); 
    }
    public function deleteFromSlider($id){
        $this->query="delete from slider where id=:id";
        $statement=$this->connection->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
    public function promoteProduct($id){
        $this->query="update products set is_promoted=1 where id:id";
        $statement =$this->conenction->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    } 
    public function demoteProduct($id){
        $this->query="update products set is_promoted=0 where id:id";
        $statement =$this->conenction->prepare($this->query);
        $statement->bindParam(":id",$id);
        $statement->execute();
    }
    public function getPromotedProducts(){
        $this->query="select * from products where is_promoted=1";
        $statement =$this->conenction->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}
?>