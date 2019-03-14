<?php
include("include/dp.php");
include("functions/functions.php");
@session_start();
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

    <title>Admin area</title>
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
    <link href="css/stt.css" rel="stylesheet">
<style>
.panel-default
{
  width: 500px;
  margin: 70px 400px 200px 500px; 
  height:180px;
}
.panel-heading
{
  font-style: serif;
  font-size: 16px;
  font-weight: bold;
}
.panel-body
{
  padding-left: 40px;
  padding-right: 40px;
}

</style>
</head>
<body>
	<!--main content-->
  
  <!--header content-->
 <nav class="navbar navbar-inverse">
 <div class="container-fluid">
 <div class="navbar-header">
  <a class="navbar-brand" href="#">WebSiteName</a>
 </div>
 <ul class="nav navbar-nav navbar-right" style="font-size:20px;">
       <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       <?php
                if(!isset($_SESSION['customer_email']))
                {
                 echo "<li><a href='#' data-toggle='modal' data-target='#loginModal'>
                 <span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                else
                {
                 echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>LogOut</a></li>";
                }
                ?>
      <!--modal-->
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
        <a href="checkout.php?forgot_pass" style="text-align:center;">Forgot Password</a>
        </div>
        <div class="form-group text-center">
        <button type="submit" class="btn btn-lg btn-danger" name="c_login" style="text-align:center;" >LogIn</button>
        </div>
        </form>
        </div>
        </div>
      </div>
      </div>
</ul>
</div>
</nav>



  <div class="container-fluid">
   <img src="img/b2.jpg" style="float:right;" height="200px" width="500px">
   <img src="img/b3.jpg" style="float:right;" height="200px" width="400px">
    <img src="img/b1.jpg" style="float:right;" height="200px" width="400px">
     <img src="img/c1.jpg" style="float:right;" height="200px" width="200px">
  </div>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="row">
      <div class="col-md-3">
         <a href="index.php" style="text-decoration:none; color:white; text-shadow:0 0 4px black;"><h3>HOME</h3></a>
      </div>
      <div class="col-md-3">
        <a href="all_product.php" style="text-decoration:none; color:white; text-shadow:0 0 4px black;"><h3>ALL PRODUCTS</h3></a>
      </div>
      <div class="col-md-3">
        <a href="my_account.php" style="text-decoration:none; color:white; text-shadow:0 0 4px black;"><h3>MY ACCOUNT</h3></a>
      </div>
      <div class="col-md-3">
        <a href="cart.php" style="text-decoration:none; color:white; text-shadow:0 0 4px black;"><h3>SHOPPING CART</h3></a>
      </div>
  </div>
  </div>
  </nav>

	<!--content start-->
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-2">
  <h2 class="round3">CATEGORIES</h2>
  <ul id="cats">
  <?php getcat(); ?>
 </ul>
 <h2 class="round3">BRANDS</h2>
  <ul id="cats">
    <?php getbrands(); ?>   
 </ul>
  </div>
  <div class="panel-group">
  <div class="panel panel-default">
  <div class="panel-heading">
  <h4><b>Find Your Account</b></h4>
  </div>
  <div class="panel-body">
  <p>Please enter your email address or phone number to search for your account.</p>
  <form method="post">
  <div class="form-group">
  <input type="text" name="c_email" class="form-control" placeholder="Enter your Email"  required><br>
  <input type="submit" name="forgot" class="btn btn-primary" value="Send me Password!" style="margin-top:-12px">
  </div>
  </form> 
  </div>
  </div>
  </div>
  </div> 
  </div>

    <!--content end-->
    <!--footer start-->
    <footer>
    <h1>&copy;2014 by www.ustadonline.com</h1>
    </footer>
    <!--footer end-->
</div>
<!--main content end-->
</BODY>
</html>



<!--for login form php work-->
<!--forgot passwprd-->
<?php
if(isset($_POST['forgot']))
{
  $c_email=$_POST['c_email'];
  $sel_c="select * from customers where customer_email='$c_email'";
  $run_c=mysqli_query($con,$sel_c);
  $check_c=mysqli_num_rows($run_c);
  $row_c=mysqli_fetch_array($run_c);
  $c_name=$row_c['customer_name'];
  $c_pass=$row_c['customer_pass'];
  if($check_c==0)
  {
    echo "<script>alert('this email doesn't exist in our database,sorry!')</script>";
    exit();
  }
  else
  {
    $from='admin@mysite.com';
    $subject='Your Password';
    $message="
    <html>
        <h3>Dear $c_name</h3>
        <p>You request for your password at www.mysite.com</p>
        <b>Your Password is</b><span style='color:red;'>$c_pass</span>
        <h3>Thank You for using our website</h3>
    </html>
        ";

        mail($email,$subject,$message,$from);
        echo "<script>alert('Password sent your email!please check your inbox!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
  }
}

 ?>


<!--login-->
<?php
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