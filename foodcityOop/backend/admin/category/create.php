<?php
session_start();
if(!isset($_SESSION["logged_in"])){
    header("location: ../login/login.php");
  }
include_once("../../../vendor/autoload.php");
use FoodcityOop\Category\Category;
$index = new Category();
if(isset($_POST['save']))
{ 
    $index->create($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../public/assets/img/favicon/logo2.png">
    <title>Category create- Admin</title>

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    
    
    <link rel="stylesheet" href="../../../public/assets/css/dashboard/style.css">
</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <a href="../dashboard.php"><h3>Admin</h3></a>
            </div>

            <ul class="list-unstyled components">
                <p>Admin - Dashboard</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../category">Category</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                        <a href="../slider/">image slider</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="../product/index.php">Product</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa-solid fa-list"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item active">
                                <a class="nav-link text-primary" data-toggle="tooltip" data-placement="bottom" title="Profile" href="../profile/profile.php"><?php echo @$_SESSION["name"] ?></a>
                            </li> 

                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log Out">
                            <a class="nav-link text-primary" href="../login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li> 
                            <li class="nav-item active">
                                <span class="nav-link" href="#"></span>
                            </li> 
                            
                          
                                      </ul>
                       
                    </div>
                </div>
            </nav>
            

            <div class="container">
                <?php

                    if(@$_GET['status'] == 'missing'){
                    echo '<div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error!</strong>fill up all the inputs.
                    </div>';
                    }

                ?>

            <div class="card">

            <div class="card-header">Add Category</div>
	<div class="card-body">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Category Name</label>
				<div class="col-sm-10">
					<input type="text" name="user_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
        <textarea id="w3review" name="des" class="form-control" ></textarea>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" name="save" value="Add Category" />
			</div>	
		</form>
	</div>
</div>









           

        </div>




    </div>

    


 <!-- partial -->
 <script  src="../../../public/assets/js/dashboard/app.js"></script>

</body>
</html>