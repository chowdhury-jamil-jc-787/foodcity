<?php

$servername = "localhost";
$username = "root";
$password = "";


$pdo = new PDO("mysql:host=$servername;dbname=food_city", $username, $password);

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();






?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Landing page</title>
</head>

<body>
    <!--  nav strat   -->
    <nav class="navbar navbar-expand-lg navbar-secondary bg-dark sticky-top">
        <div class="container-fluid">
  
          <a href="#" class="navbar-brand">
            <img src="../nav_footer/WhatsApp Image 2023-02-18 at 00.06.12.jpg" height="50px" alt="CoolBrand">
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
                <a class="btn btn-outline-success m-2 text-white" href="../../backend/admin/registration/registration.php" tabindex="-1" aria-disabled="true">Signup</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success m-2 text-white" href="../../backend/admin/login/login.php" tabindex="-1" aria-disabled="true">Login</a>
              </li>
            </ul>
           
          </div>
          <form class="d-flex">
            <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success text-white m-2" type="submit">Search</button>
          </form>
        </div>
      </nav>


    <!-- nav end  -->
	
	<div class="container"><span>  </span></div

    <!-- strat slider -->
    <section class="header">

        <div class="slider p-100px mt-2">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="https://thumbs.dreamstime.com/b/burger-homemade-wooden-background-46507020.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/1083487948/photo/tasty-pepperoni-pizza-and-cooking-ingredients-tomatoes-basil-on-black-concrete-background-top.jpg?s=612x612&w=0&k=20&c=E5rcp7F5y3SII4AYFmxFfcnkh6_LtVO4dzvjJDkXook=" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/750073/pexels-photo-750073.jpeg?cs=srgb&dl=pexels-dana-tentis-750073.jpg&fm=jpg" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- categories start -->
    <section class="featured-categories">
        <div class="container">
		            <div class="title-box">
                <h2>Popular Items</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="./cake.jpg " height="350px" width="477" alt="">
                </div>
                <div class="col-md-4">
                    <img src="./donat.jpg" height="350px" width="477" alt="">
                </div>
                <div class="col-md-4">
                    <img src="./cookies.jpg" height="350px" width="477" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- categories end -->
    <!-- sales product start -->
    <section class="sale">
        <div class="container">
            <div class="title-box">
                <h2>slaes</h2>
            </div>
            <div class="row">
                
                <div class="col-md-3">
                   
                    <div class="product-top">
                        <img src="./noodles1.jpg" >
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                                
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i  class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Noodels</h3>
                        <h5>$10.00</h5>


                    </div>
                </div>
            

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/pizza.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Pizza</h3>
                        <h5>$150.00</h5>


                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/productburger.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                            <a href="../deatilspage/index.html"><i class="fa fa-shopping-cart"></i></a>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Burger</h3>
                        <h5>$13.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/pasta.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Pasta</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sales product end-->
    <!-- new product strat -->
    <section class="new-product">
        <div class="container">
            <div class="title-box">
                <h2>New product</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./noodles1.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Noodels</h3>
                        <h5>$10.00</h5>


                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/pasta.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Pizza</h3>
                        <h5>$150.00</h5>


                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/pizza.jpg">>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Burger</h3>
                        <h5>$13.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/productburger.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Pasta</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/renoodles.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Pasta</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/orange.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Orange</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/renoodles.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Pasta</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-top">
                        <img src="./productimg/blueberry.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="quick shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>

                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                        <h3>Blueberry</h3>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- new product -->

    <section class="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-3 feature-box">
                    <img src="" height="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- end -->
    <!-- banner start -->

    <div class="banner-container">
        <div class="banner">
            <div class="show">
                  <img src="banner1.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- banner end-->
    <!-- footer start -->
    <section class="footer bg-dark">
        <div class="container text-center">
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
                    <p> <i class="fa fa-facebook-official"></i><a href="https://www.facebook.com"> Facebook</a></p>
                    <p> <i class="fa fa-youtube-play"></i> Youtube</p>
                    <p><i class="fa fa-twitter"></i> Twitter</p>
                </div>
                <div class="col-md-3 footer-img">
                    <h1>Download App</h1>
                    <img src="./footer1.png" alt="">
                </div>
            </div>
            <hr>
            <p class="copyright">Made with <i class="fa fa-heart-o"></i> by De-coderteam</p>

        </div>
    </section>
    <!-- footer end-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>