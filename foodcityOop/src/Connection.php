<?php
namespace FoodcityOop;

use PDO;

Class Connection{

  public $servername = "localhost";
  public $username = "root";
  public $password = "";

  public function connect(){
    return $conn = new PDO("mysql:host=$this->servername;dbname=food_city", $this->username, $this->password);
  }

  public function prepare($sql){
   return $statement = $this->connect()->prepare($sql);
  }


}


?>