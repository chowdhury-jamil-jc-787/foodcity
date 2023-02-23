<?php
namespace FoodcityOop\registration;
use FoodcityOop\Connection;
session_start();

class RegisterSubmit{

    public $name;
    public $email;
    public $password;
    public $img;
    

    public function success(){

        session_start();

        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        $img1 = $this->img['name'];       


        $connect = new Connection();
        $user_check_query = "SELECT * FROM users WHERE  email='$this->email' ";
        $result = $connect->prepare($user_check_query);
        $result->execute();
        $user = $result->fetch();

        

  if(!empty($this->name) && !empty($this->email) && !empty($this->password) && !empty($img1)){

    if($user){

        header("location: ./registration.php?status=matching");
    }
    else{


        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $hash,
            'image' => $this->img['name']
    
       ];


        $sql = "INSERT INTO users (name,email,password,image) VALUES (:name,:email,:password,:image)";
        $result = $connect->prepare($sql);
        $result->execute($data);

    $_SESSION["name"] = $this->name;
    $_SESSION["email"] = $this->email;
    $_SESSION["logged_in"] = true; 
    header("location: ../dashboard.php");

    }
 
  }
  else{

    header("location: ./registration.php?status=dataMissing");

}



        
    }


}



?>