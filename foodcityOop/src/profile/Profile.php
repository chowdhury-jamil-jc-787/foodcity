<?php
namespace FoodcityOop\profile;
use FoodcityOop\Connection;





Class Profile{

    public function save($data,$id){
        $connect = new Connection();

        $mail = $_SESSION["email"];
$query1 = "SELECT * FROM users WHERE email= '$mail'";
$query = $connect->prepare($query1);
$query->execute();
$row = $query->fetch();

        $new_password = $_POST['pass']; 
        $hash = password_hash($new_password, PASSWORD_DEFAULT);
      
        
        $img = $_FILES['user_image']['name'];

        if(!empty($img)){
            if(!empty($new_password)){
          
              
                $result = "UPDATE users set  name='" . $_POST['user_name'] . "', password='" . $hash . "', image='" . $img . "'  WHERE id='" . $_POST['id'] . "'";
                $query = $connect->prepare($result);
                $query->execute();
          
           header("location: profile.php?status=upi");
          exit();
          
            }else{
          
                $result = "UPDATE users set  name='" . $_POST['user_name'] . "', image='" . $_FILES['user_image']['name'] . "' WHERE id='" . $_POST['id'] . "'";
                $query = $connect->prepare($result);
                $query->execute();
          
          header("location: profile.php?status=ui");
          exit();
          
            }
            
          }else{
            if(!empty($new_password)){
                $result ="UPDATE users set  name='" . $_POST['user_name'] . "', password='" . $hash . "'  WHERE id='" . $_POST['id'] . "'";
                $query = $connect->prepare($result);
                $query->execute();
            
            header("location:  profile.php?status=upass");
            exit();
            
              }else{
        
                if($_POST['user_name'] != $row['name']){
                  
                    $result ="UPDATE users set  name='" . $_POST['user_name'] . "' WHERE id='" . $_POST['id'] . "'";
                    $query = $connect->prepare($result);
                    $query->execute();
            
                header("location:  profile.php?status=username");
                exit();
        
                }
                else{
                  header("location:  profile.php?status=wrong");
                }
        
        
              }
          
          
          }

    }
}

?>