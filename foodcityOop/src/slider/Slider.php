<?php
namespace FoodcityOop\slider;
use FoodcityOop\Connection;



Class Slider{

    public function index(){
        $connect = new Connection();
        $query1 = "SELECT * FROM image_slider ORDER BY id DESC";
        $query = $connect->prepare($query1);
        $query->execute();
        return $results = $query->fetchAll();

    }

    public function create($data){

        $data = [
            'name' => $_POST['user_name'],
            'image' => $_FILES['user_image']['name']
       ];

       $connect = new Connection();


       if(!empty($_POST['user_name']) && !empty($_FILES['user_image']['name']) ){
       $sql = "INSERT INTO image_slider (name,image) VALUES (:name,:image)";
       $result = $connect->prepare($sql);
       $result->execute($data);
       header("location: ./index.php?status=success");
       }else{

        header("location: ./add.php?status=missing");

       }

    }

    public function show($id){

        $connect = new Connection();

        $result = "SELECT * FROM image_slider WHERE id='" . $id . "'";
        $query = $connect->prepare($result);
        $query->execute();
        return $results = $query->fetch();



    }

    public function update($data,$id){
        $connect = new Connection();

        $img = $_FILES['user_image']['name'];

        
        if(!empty($img)){
        $result = "UPDATE image_slider set  name='" . $_POST['user_name'] . "', image='" . $img . "' WHERE id='" . $_POST['id'] . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success1");
    }
    else{

        $result = "UPDATE image_slider set  name='" . $_POST['user_name'] . "'  WHERE id='" . $_POST['id'] . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success1");

    }


    }

    public function delete($id){

        $connect = new Connection();

        $result = "DELETE FROM image_slider WHERE id='" . $id . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success2");



    }



}


?>