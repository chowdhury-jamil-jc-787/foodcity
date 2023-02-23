<?php
include_once('../back.php');
include_once("../../../../foodcityOop/vendor/autoload.php");

use FoodcityOop\registration\RegisterSubmit;

$reg = new RegisterSubmit();
if(isset($_POST['save']))
{ 
  $reg->name = $_POST['name'];
  $reg->email = $_POST['email'];
  $reg->password = $_POST['password'];
  $reg->img = $_FILES['user_image']; 

  if(isset($reg->img)){
    
    $file_name = $reg->img['name'];
    $file_size =$reg->img['size'];
    $file_tmp =$reg->img['tmp_name'];
    $file_type =$reg->img['type'];

    move_uploaded_file($file_tmp,"../../../public/assets/img/users/".$file_name);
 }


  
  $reg->success();

}
  


?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/footer/footer.css">
	<style>
		.container {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		.btn {
			width: 100%;
			margin-top: 20px;
		}
	</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary sticky-top">
        <div class="container-fluid">
  
          <a href="#" class="navbar-brand">
            <img src="../../../public/assets/img/favicon/logo2.png" height="28" alt="CoolBrand">
        </a>
  
          <a class="navbar-brand text-danger" href="#">Food City</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-outline-success m-2 text-white" aria-current="page" href="#">Card</a>
              </li>
           
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success m-2 text-white" href="#" tabindex="-1" aria-disabled="true">Signup</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success m-2 text-white" href="#" tabindex="-1" aria-disabled="true">Login</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control m-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success text-white m-3" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

	<div class="container mt-4">
  <?php
      if(@$_GET['status'] == 'matching'){
      echo '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Matching!</strong>Email Id already exist.
      </div>';}

      if(@$_GET['status'] == 'dataMissing'){
      echo '<div class="alert alert-danger alert-dismissible fade show">
      <strong>Missing! </strong>Please fill up all input.
      </div>';}

?>
		<h2>Registration Form</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="fullname">Full Name:</label>
				<input type="text" class="form-control" name="name" id="fullname" placeholder="Enter your full name">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
			</div>
	
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Enter Your Profile Picture</label>
                <input class="form-control" name="user_image" type="file" id="formFileMultiple" multiple>
              </div>
			
			<button type="submit" name="save" class="btn btn-primary">Register</button>
		</form>
	</div>

<!-- footer start -->
<div class="container2">
<section class="footer">
    <div class="container2 text-center ">
        <div class="row">
            <div class="col-md-3">
                <h1>Useful links</h1>
                <p>Privacy policy</p>
                <p>Terms of use</p>
                <p>Discount coupons</p>
            </div>
            <div class="col-md-3">
                <h1>Company</h1>
                <p>Aboutus</p>
                <p>Contact us</p>
                <p>Career</p>
            </div>
            <div class="col-md-3">
                <h1>Follow us</h1>
                <p> <i class="fa fa-facebook-official"></i><a href="www.facebook.com"> Facebook</a></p>
                <p> <i class="fa fa-youtube-play"></i> Youtube</p>
                <p><i class="fa fa-twitter"></i> Twitter</p>
            </div>
            <div class="col-md-3 footer-img">
                <h1>Download App</h1>
                 <img src="../../../public/assets/img/footer/footer1.png" alt="">
            </div>
        </div>
        <hr>
        <p class="copyright">Made with <i class="fa fa-heart-o"></i> by De-coder team</p>

    </div>
  </section>
</div>
  <!-- footer end-->

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>