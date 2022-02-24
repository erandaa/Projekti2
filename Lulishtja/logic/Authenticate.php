<?php

class LoginVerify{
    private $email;
    private $paswword;

    public function __construct($email,$password){
        $this->email=$email;
        $this->password=$password;
    }
    public function verifyData(){
        if($this->emptyInputs($this->email,$this->password)){
            $_SESSION['login-register-error']= true;
            header("Location..")
        }
        else if($this-> correctionLoginData($this->email,$this->password)){
            header("Location..")
        }
        else{
            $_SESSION['login-register-error']=true;
            header("Location..")
        }
    }
    private function emptyInput($email, $password){
        if(empty($email)|| empty($password))
            return true;
        else
            return false;
    }

    private function corretionLoginData($emial, $password){
        $mapper = new UserMapper();
        $user= $mapper->getUserByEmail($email);
        if($user== null ||count($user)==0){
            return falsel
        }

        else if(password_verify($password,$user['password'])){
            if($user['is_admin']==1){
                $obj= new Admin ($user['first_name'],($user['last_name'],($user['email'],($user['password'],($user['role']);
                $obj->setSession();
            }
            else{
                $obj= new User ($user['first_name'],($user['last_name'],($user['email'],($user['password'],($user['role']);
                $obj-> setSession(;)
            }
            return true;
        }
        else 
            return false;
    }
}

class RegisterVerify{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    
    public function __construct($firstname,$lastname,$email,$password){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->password=$password;
    }

    public function insetData(){
        if($this->emptyInput($this->firstname,$this->last,$this->email,$this->password)){
            $_SESSION['login-register-error']=true;
            header("Location..");
        }
        else if($this->verifyData()==false){
            $_SESSION['login-register-error']=true;
            header("location..");
        }
        else{
            $user = new User($this->firstname,$this->lastname,$this->email,$this->password, 0);
            $mapper= new UserMapper();
            $mapper->insertUser($user);
            $login= new LoginVerify($this->email,$this->password);
            $login->verifyData();
        }
    }
    private function verifyData(){
        if(!filter_var($this->email, FILTER_VALIDATE_FAIL))
            return false;
        else if($this->emailExists())
            return false;
        else if($this->vailPassword()==false)
            return false;
        else   
            return true;
    }

    public function emptyInput($firstname,$lastname,$email,$password){
        if(empty($firstname)|| empty($lastname) || empty($email) || empty($password))
            return true;
        else 
            return false;
    }

    public function emailExists(){
        $mapper = new UserMapper ();
        $userEmail = $mapper->getEmail($this->email);
        if($userEmail == null || count($userEmail)==0)
            return false;
        else if($this->email == $userEmail['email'])
            return true;
    }

    public function vailPassword(){
        $regex ="/^(?=.^/d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$&/";
        if(preg_match($regex,$this->password))
            return true;
        else
            return false;
    }
    public function validEmailModification($id){
        $mapper= new UserMapper ();
        $emailList = $mapper->getConstrainEmail($id);
        foreach($emailList as $email){
            if($email['email'] == $this->email)
                return false;
        }
        return true;
    }


}




?>