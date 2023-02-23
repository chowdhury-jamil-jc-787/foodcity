<?php
namespace FoodcityOop\login;
use FoodcityOop\Connection;


Class LoginSubmit{
    public function check($data){

        $connect = new Connection();


        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    
        if(!empty($email) && !empty($password)){
    
            $sql = "select * from users where email = '".$email."'";
            $query = $connect->prepare($sql);
            $query->execute();
            $results = $query->fetch();
            
            if(!empty($results)){

                    if(password_verify($password,$results['password'])){
                        $_SESSION["name"] = $results['name'];
                        $_SESSION["email"] = $results['email'];
                        $_SESSION["logged_in"] = true; 
                        header("location: ../dashboard.php");
                    }
                    else{
                        header("location: login.php?status=password");
                    }
                
            }
            else{
                header("location: login.php?status=NotFound");
            }
    
        }
        else{
    
            header("location: login.php?status=NotFilled");
    
        }
    

    }
}

?>