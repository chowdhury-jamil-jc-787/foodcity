<?php 

 $servername = "localhost";
 $username = "root";
 $password = "";

 
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
    <title >Food To Go</title>
        <link rel="icon" type="image/x-icon" href="../nav_footer/WhatsApp Image 2023-02-18 at 00.06.12.jpg">

    <link rel="stylesheet" href="">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="custom-checkout.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../nav_footer/footer.css">
    
</head>

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
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success text-white" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

<!-- nav end  -->

<!-- strat slider -->



<div>
    <form action="Checkout form">
        <div class="container">
            <div class="py-5 text-center">

                <h1 class="head-text">Checkout form</h1>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill text-muted">Product Item:- 4 </span>
                    </h4>

<?php 
$i=1;
// $total=0;
foreach ($products as $product)

// $total += $product['price'];
{?>


    <ul class="list-group mb-3">
    <li class="list-group-item d-flex justify-content-between lh-condensed">
        
        <div>

            <small class="text-muted"><?php echo $i++; ?> Product Name : <?php echo $product['name']; ?></small>
          
        </div>
        <span class="text-muted">Price: ৳  <?php echo $product['price']; ?></span>
        </ul>

<?php  }   ?>










<li class="list-group-item d-flex justify-content-between bg-secondary text-info">
<span> 
Grand Total <br></span>
<strong> 
: ৳
<?php
// $a=array(
//     $product['price'],
//      $product['price'], );
// echo  array_sum($a);

$total=0;
foreach ($products as $product)

$total += $product['price'];

echo $total
?>
  </strong>
</li>

                              
</div>
<?php 
// $con = mysqli_connect('localhost','root','','final-food-city');
// if(isset($_POST['submit'])){

//     // echo 'ok';
//  $firstname = $_POST ['firstname'];
//  $lastname = $_POST ['lastname'];
//  $username = $_POST ['username'];
//  $email = $_POST ['email'];
//  $number = $_POST ['number'];
//  $address = $_POST ['address'];
//  $address2 = $_POST ['address2'];
//  $district = $_POST ['district'];
//  $upazila = $_POST ['upazila'];
//  $city = $_POST ['city'];
//  $village = $_POST ['village'];
//  $addressuse = $_POST ['addressuse'];
//  $payment = $_POST ['payment'];
//  $bankname = $_POST ['bankname'];
//  $banknumber = $_POST ['banknumber'];
//  $bankdate = $_POST ['bankdate'];
//  $bankcc = $_POST ['bankcc'];


// $sql = "INSERT INTO address(firstname,lastname,username,email,number,address,address2,district,upazila,city,village,addressuse,payment,bankname,banknumber,bankdate,bankcc)
// VALUES('$firstname','$lastname','$username','$email','$number','$address','$address2','$district','$upazila','$city','$village','$addressuse','$payment','$bankname','$banknumber','$bankdate','$bankcc')";
// if(mysqli_query($con,$sql) == TRUE){
// echo "Data Inserted";
// }else{
// echo " Data no inser";

// }
// }
//  if($pdo->connect_error){
//      die('connection Faild :' '.$pdo->connect_error');

//  }else{
//     $stmt = $pdo->prepare("insert into address(mysql:host=$servername;dbname=final-food-city", $username, $password)");
//     $stmt->bind_param("sssssi",insert into address mysql:host=$servername;dbname=final-food-city", $username, $password;
//     $stmt->execute();
//     echo"address successfully...";
//     $stmt->close();
//     $pdo->close();
//  }
 
 
 
 
 
 ?> 




                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" novalidate >
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label  for="firstName">First name</label>
                                <input type="text" class="form-control"name="firstname" id="firstName" placeholder="First name" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="Last name" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text">@</span> -->
                                </div>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@gmail.com">
                            <small class="text-muted">Please enter a valid email address</small>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <!-- number -->
                        <div class="mb-3">
                            <label for="Number"> Phone Number: <span class="text-muted"></span> </label>
                            <input type="Number" class="form-control" name="number" id="Number" placeholder=" Number">
                            <div class="invalid-feedback">
                                Please enter a valid phone Number address for shipping updates.
                            </div>
                        </div>
                        <!-- number end -->
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control"name="address" id="address" placeholder="" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control"name="address2" id="address2" placeholder="">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="District">District</label>
                                <!-- <input type="text"name="district" id="district"> -->
                                <select class="custom-select d-block w-100"  name="district"id="District" required>
                                    <option value="">Choose...</option>
                                    <option>Dhaka</option>
                                    <option>Gazipur</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="upazila">upazila</label>
                                <select class="custom-select d-block w-100" name="upazila" id="upazila" required>
                                    <option value="">Choose...</option>
                                    <option>Dhamrai</option>
                                    <option>Dohar</option>
                                    <option>Keraniganj</option>
                                    <option>Nawabganj</option>
                                    <option>Savar</option>
                                    <option>Gazipur Sadar</option>
                                    <option>Kaliakoir</option>
                                    <option>CaKaliganj</option>
                                    <option>Sreepur</option>
                                    <option>Kapasia</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="City">City</label>
                                <select class="custom-select d-block w-100" name="city" id="City" required>
                                    <option value="">Choose...</option>
                                    <option>Savar</option>
                                    <option>Dohar</option>
                                    <option>Dhamrai</option>
                                    <option>Kaliakoir</option>
                                    <option>Sreepur</option>
                                    <option>Kaliganj</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="Village/Zip">Village/Zip</label>
                                <input type="text" class="form-control" name="village" id="Village/Zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="addressuse" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"name="addressuse" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">

                            <!-- <div class="custom-control custom-radio">
                                <input id="bkash" name="payme" type="radio" class="custom-control-input" 
                                    required>
                                <label class="custom-control-label" for="bkash">Bkash</label>
                            </div> -->
                            <div class="custom-control custom-radio">
                                <input id="bkash" name="paym" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Bkash</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="Rocket" name="paym" type="radio" class="custom-control-input" 
                                    required>
                                <label class="custom-control-label" for="Rocket">Rocket</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paym" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Bank Account Name </label>
                                <input type="text" class="form-control" name="bankname" id="cc-name" placeholder="" required>
                                <!-- <small class="text-muted">Full name as displayed on card</small> -->
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Bank Account Number/Credit Card Number</label>
                                <input type="text" class="form-control" name="banknumber" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration <span class="text-muted">(For cards
                                        only)</span></label>
                                <input type="text" class="form-control" name="bankdate" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV <span class="text-muted">(For cards only)</span></label>
                                <input type="text" class="form-control" name="bankcc" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        </form>
                        <hr class="mb-4">
                       <!-- <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Insert"  >
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Insert" href="../invoice/invoice.html" target="invoice">Continue to
                            checkout</button> -->

                            <?php
                         echo  '<a href="../invoice/invoice.php" class="btn btn-primary btn-lg btn-block">Continue to checkout </a>';
                        ?>

                    </form>
                </div>
            </div>
<div>



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
                 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>
 
</body>

</html>