<?php
include("include/dp.php");
include("functions/functions.php");
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <title>ItemTech</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/2068589c33.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
   <style type="text/css">
  
body
{
  margin-top: 0.3%;
  background: #e6e6e6;
}
.header .sign a
{
  float: right;
font-size:28px;
 margin-top:9%;
}
.header .login a{
font-size:28px;
 margin-top:9%;
float: right;
}
.cart
{
  margin-top: 28px;
  margin-right: -67%;

}

.cart .sh_cart
{
   color:#737373;
   text-decoration: none;
}

.badge
{
  background-color: #990099;
}


 .mymenu .navbar-default
  {
    background:#737373;
  }
  .mymenu .navbar-nav .active a
    {
        background-color: #990099;
        color: #fff;
    }
    .mymenu .navbar-nav .active a:hover
    {
        background-color: #990099;
        color: #fff;
    }
    .mymenu .navbar-nav li a
    {
      color: #fff;
      font-size: 18px;
      
    }
    .mymenu .navbar-nav li a:hover
    {
       background-color: #990099;
      color: #fff;
       font-size: 18px;
    }

    .carousel-inner>.item>img, .img-responsive {
    display: block;
    max-width: 100%;
    height: 400px; 
      margin: auto;

}

#slider
{
  margin-top: -21px;
  background-color:black;
}
.login a{
  text-decoration: none;
   color:#990099;
     float: right;
     font-size: 28px;
     margin-right: -240px;
}
.sign a{
font-size: 28px;
 text-decoration: none;
  float: right;
  margin-right:-180px;
   color:#990099;
}
.pro
{
  color:#990099;
   font-family: Georgia, serif;
    font-weight:bold;
     font-size:35px;
}
.category
{
  margin-top:7%;
   color:#990099;
   font-family: Georgia, serif;
    font-weight:bold;
     font-size:25px;
}
.brand
{
   color:#990099;
   font-family: Georgia, serif;
    font-weight:bold;
     font-size:25px;
}
.link li
{
  list-style:none;
  padding: 0.6%;

}
.link li a 
{
   text-decoration: none;
  color: white;
  font-size: 18px;
}
.link li a:hover 
{
  text-decoration: underline;
  color: white;
  font-size: 18px;
}

@media screen and (max-width: 1000px){
  footer .row{
      text-align: center;
    }
    footer .row .link h3{
       margin: 0%;
      padding: 0%;
      text-align: left;
      margin-left: -4.5%;
    }
}

@media screen and (max-width: 1100px){
  footer .font-id
  {
    font-size: 10px;
  }

}
@media screen and (max-width: 1500px) and (min-width:950px){
  .header
  {
    width: 80%;
  }

  .logo
  {
    margin-left:0%;
    padding: 0%;
  }
.header .sign a
{
  float: right;
  font-size: 22px;
  padding: 0px 80px 0px 100px;

}
.header .login a
{
  padding: 0px 110px 0px 50px;
  font-size: 22px;
}
}
@media screen and (max-width:952px){

  .logo
  {
    text-align: center;
    margin-left:0%;
    padding: 0%;
  }
  .header .sign  a
{
  float: none;
  text-align: center;
  margin: 0%;
  font-size: 22px;
}
.header .login a
{
  float: none;
  text-align: center;
  margin: 0%;
  font-size: 22px;
}
}
.display
{
  width: 30%;

}
.display .thumbnail .image {
  opacity: 1;
  /*display: block;*/
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.thumbnail
{
  padding: 20px;
}
 .thumbnail a>img, .thumbnail>img {
    display: block;
    width: 100px;
    height: 250px;
}
.thumbnail:hover .image {
  opacity: 0.3;
}

.thumbnail:hover .middle {
  opacity: 1;
}
 

.middle .btn-purple
{
  background: #990099;
  color:white ;
}
.middle .btn-grey
{
  background-color: #737373;
  color:white;
  margin-bottom: 2.5%;
}
@media screen and (max-width:1020px) and (min-width:1000){
  .display
  {
    width: 100%;
  }
}
@media screen and (max-width:999px) and (min-width:550){

.display
{
  width: 100%;
}
  
  .thumbnail
  {
    text-align: center;
  }
 
}
@media screen and (max-width:551px){
  .display
{
  width: 100%;
}
  
  .thumbnail
  {
    text-align: center;
  }

}
@media screen and (max-width:900px) and (min-width: 200px){
  .title
  {
    font-family: 'times new roman';
    font-size-adjust: 0.58;
  }
  .price
  {
     font-family: 'times new roman';
    font-size-adjust: 0.58;
  }
}

  </style>
</head>
<body>
<!--header content-->
<div class="container header">
<div class="row" >
<div class="col-md-8 logo" style="padding:1%; margin-left:-11%;">
<h2 style="font-family: fantasy; font-weight:bolder; font-size:40px;">
  <span style="color:#737373">ITEM</span><span style="color:#990099">TECH</span></h2></div>

  <?php
if(!isset($_SESSION['u_email']))
{
  echo "<div class='col-md-2 pull-right text-center sign'><a href='#' data-toggle='modal' data-target='#loginModal'>
  <span class='glyphicon glyphicon-log-in'></span> Login</a></div>";
}
else
{
  echo "<div class='col-md-2 pull-right text-center sign'><a href='logout.php'>
  <span class='glyphicon glyphicon-log-out'></span>LogOut</a></div>";
}
?>
<!--modal signUp-->
<div id="loginModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <div class="modal-title"> <h2 style="text-align:center; font-weight: bold;
  font-size: 30px; font-family: sans-serif;">Login</h2></div>
  </div>
<div class="modal-body">
<form action="" method="post">
  <div class="form-group">
  <label for="emailInput">Email:</label>
  <input type="email" class="form-control" id="emailInput"  name="c_email" placeholder="Enter your Email" required>
  </div>
  <div class="form-group ">
  <label for="password">Password:</label>
  <input type="password" class="form-control" name="c_pass" id="password" placeholder="Enter your Password" required>
  </div>
  <div class="form-group text-center">
  <a href="forgot_pass.php?forgot_pass" style="text-align:center;">Forgot Password</a>
  </div>
  <div class="form-group text-center">
  <button type="submit" class="btn btn-lg btn-danger" name="c_login" style="text-align:center;" >LogIn</button>
  </div>
</form>
</div>
</div>
</div>
</div>  
  <div class="col-md-2 pull-right login"><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span>SignUp</a></div>
 <div id="signupModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="modal-title"> <h2 style="text-align:center; font-weight: bold;
font-size: 30px; font-family: sans-serif;">SignUp</h2></div>
</div>
<div class="modal-body">
<form action="" method="post">
  <div class="form-group">
  <label for="cname">Full Name:</label>
  <input type="text" class="form-control" id="customerName"  name="c_name" placeholder="Enter your Name" required>
  </div>
  <div class="form-group ">
  <label for="cemail">Email:</label>
  <input type="email" class="form-control" name="cus_email" id="cemail" placeholder="Enter your Email" required>
  </div>
  <div class="form-group ">
  <label for="cpass">Password:</label>
  <input type="password" class="form-control" name="c_pass" id="cpass" placeholder="Enter Password" required>
  </div>
  <div class="form-group ">
  <label for="ccountry">Country Name:</label><br>
  <select name="c_country" id="ccountry" width="auto">
  <option>Select a Country</option>
  <option>Afghanistan</option>
  <option>Chhina</option>
  <option>India</option>
  <option>Iran</option>
  <option>Japan</option>
  <option>Pakistan</option>
  <option>Saudia Arabia</option>
  <option>United Arab Emirates</option>
  <option>United Stated America</option>
  <option>United Kingdom</option>            
  </select>
  </div>
  <div class="form-group ">
  <label for="ccity">City Name:</label>
  <input type="text" class="form-control" name="c_city" id="ccity" placeholder="Enter your City" required>
  </div>
  <div class="form-group ">
  <label for="cmob">Mobile No.:</label>
  <input type="number" class="form-control" name="c_contact" id="ccity" placeholder="Enter your mobile number" required>
  </div>
  <div class="form-group ">
  <label for="caddress">Address:</label>
  <input type="text" class="form-control" name="c_address" id="caddress" placeholder="Enter your Address" required>
  </div>
  <div class="form-group">
  <label for="cimage">Image:</label>
  <input type="file" class="form-control" name="c_image" id="cimage" >
  </div>
  <div class="form-group text-center">
  <button type="submit" class="btn btn-lg btn-primary" name="register" style="text-align:center;" >SignUp</button>
  </div>
</form>
</div>
</div>
</div>
</div>

     
</div> <!--end rows-->
</div><!--end top bar-->
<!--<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">ItemTech</a>
</div>
<ul class="nav navbar-nav navbar-right" style="font-size:20px;">
<li><form method="get" enctype="multipart/form-data" action="result.php" style="margin-top:10px;">
            <input type="text" name="user_query" placeholder="Search a Product" style="color:black;" required>
            <button type="submit" class="btn btn-default" name="search"><span class="glyphicon glyphicon-search"  style="font-size:15px;"></span></button>
          </form></li>
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" style="font-size:25px;"></span><span class="badge" style="margin-top:-35px; margin-left:-6px; font-size:18px; color:yellow;"><?php cart(); items(); ?> </span></a></li>

<!--menu-->
<div class="mymenu">
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
<div class="collapse navbar-collapse" id="mynavbar">
<ul class="nav navbar-nav">
<li ><a href="index.php" >HOME</a></li>
<li><a href="product.php">PRODUCTS</a></li>
<li><a href="my_account.php?account">BRANDS</a></li>
<li><a href="cart.php">CONTACT US</a></li>
<li><a href="my_account.php?account">MY ACCOUNT</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" style="font-size:25px;">
</span><span class="badge" style="margin-top:-35px; margin-left:-6px; font-size:18px; color:white;">
<?php cart(); items(); ?> </span></a></li>
<li>
<form class="navbar-form" role="search" method="get" enctype="multipart/form-data" action="result.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="user_query" style="color:black;" required>
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search" style="color:#990099"></i></button>
      </div>
    </div>
    </form>
  </li>
</ul>
 
</div> <!--end collapse-->
</div><!--end container-->
</nav>
</div><!--mymwnu-->



<div class="container" style="margin-bottom:3%;">
 <!--product display-->
          <div id="product_box">
           <?php 
         if(isset($_GET['search']))
         {
         $user_keyword=$_GET['user_query'];
         $get_product="select * from product where product_keyword like '%$user_keyword%'";
         $run_product=mysqli_query($con,$get_product);
         while($row_product=mysqli_fetch_array($run_product))
         {

          $pro_id=$row_product['product_id'];
          $pro_title=$row_product['product_title'];
          $pro_cat=$row_product['cat_id'];
          $pro_brand=$row_product['brand_id'];
          $pro_desc=$row_product['product_desc'];
          $pro_price=$row_product['product_price'];
          $pro_image=$row_product['product_img1'];
           
         echo "
        <div class='col-md-3 col-sm-6 display'>

                     <div class='thumbnail' style='margin-top:25px; '>

                       <h2 class='title' style='font-weight:bold;color:#862d86; text-align:center;'>$pro_title</h2>
                     <img src='admin_area/product_image/$pro_image' class='img-responsive image' alt='$pro_title' />
                     <div class='caption'>
                     <h3 class='price' style='text-align:center; text-align:left;'>price:$pro_price</h3><br>
                       <div class='middle'>
                     <a href='detail.php?pro_id=$pro_id' class='btn btn-grey' role='button'><span style='font-family:Verdana; text-align:center; margin-bottom:25px;'>Details</span></a> </br>
                     <a href='index.php?add_cart=$pro_id' class='btn btn-purple' role='button' style='text-align:center;'><span style=' font-family:Verdana;'>Add to Cart</span></a> 
                     </div>
                     </div>
                     </div>
                     </div>
          ";
            
         }
         }
             ?>

           </div>   
</div><!--col-10-->

<!--content end-->
<!--footer start-->
<footer id="footer" class="container-fluid">
<div class="row">
<div class="col-md-3" style="text-align:left; padding:10px; margin:5px; font-size:17px; margin-left:3%;">
<h3>Our Information!</h3>
</br>
<p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
 when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="col-md-3 link" style="text-align:left; padding:10px; padding-left:8%; margin:5px; font-size:20px;"> 
<h3>Quick Links!</h3>
</br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="product.php">PRODUCTS</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="my_account.php">MY ACCOUNT</a></li>
</ul>
</div>
<div class="col-md-3 contct" style="text-align:left; padding:10px; margin:5px; font-size:20px;">
<h3>Contact Us!</h3> <br>
<p><span class="glyphicon glyphicon-map-marker"></span>Karachi,Pakistan</p>
<p><span class="glyphicon glyphicon-phone"></span>0321 5678543</p>
<p><span class="glyphicon glyphicon-envelope"></span>email@something.com</p>
</div>
<div class="col-md-2 follow" style="text-align:left; color:white; text-decoration:none; padding:10px; margin:5px; font-size:16px;">
<h3>Follow US!</h3>
<br>
<div class="font-id">
<a href="https://www.facebook.com/"><i class="fa  fa-facebook fa-3x" aria-hidden="true"></i></a>
<a href="https://www.twitter.com/"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
<a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>
<a href="https://plus.google.com/"><i class="fa fa-google-plus-circle fa-3x" aria-hidden="true"></i></a>
</div> 
</div>
</div><!--row end-->
<div class="row">
<h3 class="text-center">&copy;2017 by www.itemtech.com</h3>
</div>
</footer>
<!--main content end-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</BODY>
</html>

<!--Signup-->
<?php
if(isset($_POST['register']))
{
  $c_name=$_POST['c_name'];
  $cus_email=$_POST['cus_email'];
  $c_pass=$_POST['c_pass'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];
  $c_image=$_POST['c_image']['name'];
  $c_image_tmp=$_POST['c_image']['tmp_name'];
  $c_ip=getUserIP();


  $insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) 
  values ('$c_name','$cus_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

  $run_customer=mysqli_query($con,$insert_customer);

  move_uploaded_file($c_image_tmp,"customer/customer_photos/$c_image");
  $sel_cart="select * from cart where ip_add='$c_ip'";
  $run_cart=mysqli_query($con,$sel_cart);
  $check_cart=mysqli_num_rows($run_cart);

  if($check_cart>0)
  {                                                     
   $_SESSION['customer_email']=$cus_email;
   echo "<script>alert('Account Created Sucessfully!')</script>";
   echo "<script>window.open('checkout.php','_self')</script>";
  }
  else
 {
   $_SESSION['customer_email']=$cus_email;
    echo "<script>alert('Account Created Sucessfully!')</script>";
   echo "<script>window.open('index.php','_self')</script>";
 }
}

?>

<?php
//login customer
if(isset($_POST['c_login']))
{
$customer_email=$_POST['c_email'];
$customer_pass=$_POST['c_pass'];
$sel_customer="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
$run_customer=mysqli_query($con,$sel_customer);
$check_customer=mysqli_num_rows($run_customer);
$get_ip=getUserIP();
$sel_cart="select * from cart where ip_add='$get_ip'";
$run_cart=mysqli_query($con,$sel_cart);
$check_cart=mysqli_num_rows($run_cart);

if($check_customer==0)
{
echo "<script>alert('Email or Password incorrect!! Try again!');</script>";
exit();
}

if($check_customer==1 AND $check_cart==0)
{
$_SESSION['customer_email']=$customer_email;
echo "<script>window.open('my_account.php','_self');</script>";
}

else
{
$_SESSION['customer_email']=$customer_email;
echo "<script>alert('Yoou have succesfully logged in,order now');</script>";
include('payment_options.php');
}
}
?>
