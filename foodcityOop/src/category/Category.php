<?php
namespace FoodcityOop\Category;
use FoodcityOop\Connection;




Class Category{

    public function index(){
        $connect = new Connection();
        $query1 = "SELECT * FROM categories ORDER BY id DESC";
        $query = $connect->prepare($query1);
        $query->execute();
        return $results = $query->fetchAll();

    }

    public function create($data){
        $data = [
            'name' => $_POST['user_name'],
            'description' => $_POST['des']
       ];

       $connect = new Connection();


       if(!empty($_POST['user_name']) && !empty($_POST['des']) ){
       $sql = "INSERT INTO categories (name,description) VALUES (:name,:description)";
       $result = $connect->prepare($sql);
       $result->execute($data);
       header("location: ./index.php?status=success");
       }else{

        header("location: ./create.php?status=missing");

       }

    }
    
    public function show($id){

        $connect = new Connection();

        $result = "SELECT * FROM categories WHERE id='" . $id . "'";
        $query = $connect->prepare($result);
        $query->execute();
        return $results = $query->fetch();



    }

    public function update($data,$id){
        $connect = new Connection();

        $result = "UPDATE categories set  name='" . $_POST['user_name'] . "', description='" . $_POST['des'] . "'  WHERE id='" . $id . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success");

    }

    public function delete($id){

        $connect = new Connection();

        $result = "DELETE FROM categories WHERE id='" . $id . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success2");



    }





}



?>