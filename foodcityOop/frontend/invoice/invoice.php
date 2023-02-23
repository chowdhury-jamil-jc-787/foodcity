<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";

 // try {
 $pdo = new PDO("mysql:host=$servername;dbname=food_city", $username, $password);

 $stmt = $pdo->query("SELECT * FROM products");
 $products = $stmt->fetchAll();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food To Go</title>
    <link rel="icon" type="image/x-icon" href="../nav_footer/WhatsApp Image 2023-02-18 at 00.06.12.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="custom-invoice.css">
    <link rel="stylesheet" href="../nav_footer/footer.css">
    <link rel="stylesheet" href="../nav_footer/nav.css">
</head>



<!-- <div class="container-fluid "> -->


<body class="body-bg">


     <!--  nav strat   -->
     <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary sticky-top">
        <div class="container-fluid">
  
          <a href="#" class="navbar-brand">
            <img src="../nav_footer/WhatsApp Image 2023-02-18 at 00.06.12.jpg" height="28" alt="CoolBrand">
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
           
          </div>
          <form class="d-flex">
            <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success text-white m-2" type="submit">Search</button>
          </form>
        </div>
      </nav>


<!-- nav end  -->

   

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-actions-btns mb-5">
                                            <a href="Downlod.php? file=" target="_thapa" download class="btn btn-primary">
                                                <i class="icon-download"></i> Download
                                            </a>
                                            <a href="../thank/thank.html" class="btn btn-primary">
                                                <i class="icon-download"></i> Print
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                        <a href="#" class="invoice-logo text-primary ">
                                            Food To Go
                                        </a>
                                    </div>
                                </div>
                                <!-- Row end -->

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                Food To Go<br>
                                                Dhaka,Bangladesh.
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>House #20 (3rd Floor) <br>
                                                    Road # 17,Nikanjia-2 Dhaka, <br></div>
                                                <div>January 04th 2023</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-body">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    

                                                        <?php 
                                                            $i=1;
                                                            foreach ($products as $product){?>
                                                        <tr class="m-0 text-white">
                                                        <td>
                                                            
                                                            <p class="m-0 text-white">
                                                            <?php echo $i++; ?> Product Name : <?php echo $product['name']; ?>
                                                            </p>
                                                        </td>
                                                        <td><?php echo $product['id']; ?></td>
                                                        <td>1</td>
                                                        <td>Price: ৳  <?php echo $product['price']; ?></td>
                                                    </tr>
                                                        <?php  }   ?>

                                                    
                                                    <!-- <tr>
                                                        <td>
                                                            Second product
                                                            <p class="m-0 text-muted">
                                                                My fruit is vajal free
                                                            </p>
                                                        </td>
                                                        <td>#50000126</td>
                                                        <td>1</td>
                                                        <td>৳100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Third item
                                                            <p class="m-0 text-muted">
                                                                My food is free from vajal
                                                            </p>
                                                        </td>
                                                        <td>#50000821</td>
                                                        <td>1</td>
                                                        <td>৳100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Four item
                                                            <p class="m-0 text-muted">
                                                                My food is free from vajal
                                                            </p>
                                                        </td>
                                                        <td>#50000821</td>
                                                        <td>1</td>
                                                        <td>৳100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Sub_Total <br>
                                                                Shipping &amp; Handling<br>Tax <br>

                                                            </p>
                                                            <h5 class="text-warning"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td> 
                                                            <p>
                                                                ৳800.00<br>
                                                                ৳100.00<br>
                                                                ৳50.00<br>
                                                            </p>
                                                            <h5 class="text-warning"><strong>৳950.00</strong></h5>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
                      <!-- footer start -->
          


                      <footer class="my-5 pt-5 text-muted text-center text-small ">
             
              
                        
                        <section class="footer">
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
                                      <p> <i class="fa fa-facebook-official"></i><a href="www.facebook.com"> Facebook</a></p>
                                      <p> <i class="fa fa-youtube-play"></i> Youtube</p>
                                      <p><i class="fa fa-twitter"></i> Twitter</p>
                                  </div>
                                  <div class="col-md-3 footer-img">
                                      <h1>Download App</h1>
                                       <img src="../nav_footer/footer1.png" alt="">
                                  </div>
                              </div>
                              <hr>
                              <p class="copyright">Made with <i class="fa fa-heart-o"></i> by De-coderteam</p>
                  
                          </div>
                        </section>

    
    
                </footer>
                  <!-- footer end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>