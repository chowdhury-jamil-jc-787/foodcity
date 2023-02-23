<?php
namespace FoodcityOop\product;
use FoodcityOop\Connection;



Class Product{

    public function index(){
        $connect = new Connection();
        $query1 = "SELECT products.id, products.image, products.name, products.description, products.price, products.quantity, products.status,  categories.name as cat_name FROM products LEFT JOIN categories ON categories.id = products.category_id ORDER BY products.id DESC;";
        $query = $connect->prepare($query1);
        $query->execute();
        return $results = $query->fetchAll();

    }
    public function create($data){

        $data = [
            'name' => $_POST['user_name'],
            'description' => $_POST['des'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
            'status' => $_POST["flexRadioDefault"],
            'category' => $_POST['category'],
            'image' => $_FILES['user_image']['name']
       ];

       $connect = new Connection();


       if(!empty($_POST['user_name']) && !empty($_POST['des']) && !empty($_POST['price']) && !empty($_POST['quantity'])  && !empty($_POST['category']) && !empty($_FILES['user_image']['name']) ){
       $sql = "INSERT INTO products (name,description,price,quantity,status,category_id,image) VALUES (:name,:description,:price,:quantity,:status,:category,:image)";
       $result = $connect->prepare($sql);
       $result->execute($data);
       header("location: ./index.php?status=success");
       }else{

        header("location: ./create.php?status=missing");

       }

    }

    public function show($id){

        $connect = new Connection();

        $result = "SELECT * FROM products WHERE id='" . $id . "'";
        $query = $connect->prepare($result);
        $query->execute();
        return $results = $query->fetch();



    }

    public function update($data,$id){
        $connect = new Connection();

        $img = $_FILES['user_image']['name'];

        
        if(!empty($img)){
        $result = "UPDATE products set  name='" . $_POST['user_name'] . "', image='" . $img . "',quantity='" . $_POST['quantity'] . "',price='" . $_POST['price'] . "', status='" . $_POST["flexRadioDefault"] . "',category_id='" . $_POST['category'] . "',stock='" . $_POST['stock'] . "',description='" . $_POST['des'] . "'  WHERE id='" . $_POST['id'] . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success1");
    }
    else{

        $result = "UPDATE products set  name='" . $_POST['user_name'] . "', image='" . $_POST['img1'] . "',quantity='" . $_POST['quantity'] . "',price='" . $_POST['price'] . "', status='" . $_POST["flexRadioDefault"] . "',category_id='" . $_POST['category'] . "',stock='" . $_POST['stock'] . "',description='" . $_POST['des'] . "'  WHERE id='" . $_POST['id'] . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success1");

    }


    }

    public function delete($id){

        $connect = new Connection();

        $result = "DELETE FROM products WHERE id='" . $id . "'"; 
        $query = $connect->prepare($result);
        $query->execute();

        header("location: ./index.php?status=success2");



    }

}

?>