<?php

class Product{
    private $emri;
    private $cmimi;
    private $pershkrimi;
    private $sasia;
    private $kategoria;
    private $image;
    private $admin;
    private $prodhuesi;

    public function __constuct($emri,$cmimi,$pershkrimi,$sasia,$kategoria,$image,$admin_id,$prodhuesi){
        $this->emri=$emri;
        $this->cmimi=$cmimi;
        $this->pershkrimi=$pershkrimi;
        $this->sasia=$sasia;
        $this->kategoria=$kategoria;
        $this->image=$image;
        $this->admin=$admin_id;
        $this->prodhuesi=$prodhuesi;
    }

    public function getEmri(){
        return $this->emri;
    }
    public function getCmimi(){
        return $this->cmimi;
    }
    public function getPershkrimi(){
        return $this->pershkrimi;
    }
    public function getSasia(){
        return $this->sasia;
    }
    public function getKategoria(){
        return $this->kategoria;
    }
    public function getImage(){
        return $this->image;
    }
    public function getAdminId(){
        return $this->admin;
    }
    public function getProdhuesi(){
        return $this->prodhuesi;
    }
}
?>