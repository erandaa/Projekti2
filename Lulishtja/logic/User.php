<?php

require_once 'Human.php';

class User extends Human{
    public function __construct($name,$lastname,$email,$password,$role){
        parent::__construct($name,$lastname,$email,$password,$role);
    }
   
    public function setSession(){
        $_SESSION['role']=0;
        $_SESSION['rolename']="DefaultUser";
        $_SESSION['is_logged_in']=true;
        $_SESSION['email']=$this->email;
    }
    public function setCookie(){
        setCookie("email",$this->getEmail(),time()+3600);
    }
    public function getFirstName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
}
?>