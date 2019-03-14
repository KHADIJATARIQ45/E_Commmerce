<?php
session_start();

if(!isset($_SESSION['admin_email']))
{
   echo "<script>window.open('login.php','_self')</script>";
}


else{

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

    <!-- Custom styles for this template -->
    <link href="css/stt.css" rel="stylesheet">
  </head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<h2>Admin Panel</h2>  
</div>

<ul class="nav navbar-nav navbar-right">
<li><button class="btn btn-lg btn-danger" style="font-size:24px; background:#800000; ">
  <a href="index.php?logout" style="text-decoration:none; color:white;">
      <span class="glyphicon glyphicon-log-out"></span>LogOut</a></button></li>
</ul>
</div>
</nav>
<br>
<br>

<div class="container-fluid">
 <div class="row">
<nav class="col-sm-3" id="side">
      <ul class="nav nav-pills nav-stacked sidenav" id="sidebar" style="align:center;">
      	&nbsp;
      	&nbsp;
      	
        <li><img src="img/user.png" class="img-circle" alt="admin" width="100" height="150"> </li>
        <li><a href="index.php?insert_pro"><b>Insert New Product</b></a></li>
        <li><a href="index.php?view_pro"><b>View All Product</b></a></li>
        <li><a href="index.php?insert_cat"><b>Insert New Category</b></a></li>
        <li><a href="index.php?view_cats"><b>View All Categories</b></a></li>
        <li><a href="index.php?insert_brand"><b>Insert New Brand</b></a></li>
        <li><a href="index.php?view_brands"><b>View All Brands</b></a></li>
        <li><a href="index.php?view_customers"><b>View Customers</b></a></li>
        <li><a href="index.php?view_orders"><b>View Orders</b></a></li>
        <li><a href="index.php?view_pay"><b>View Payments</b></a></li>
      </ul>
      &nbsp;
</nav>
<div class="col-sm-9">
  &nbsp;
  <h2 colspan="8" style="color:white; align:center; padding-left:380px; margin-right:160; margin-top:150;"><?php echo @$_GET['logged_in']; ?></h2>

  <?php
   include("include/dp.php");

   if(isset($_GET['insert_pro']))
   {
     include("insert_product.php");
   }

   if(isset($_GET['view_pro']))
   {
     include("view_product.php");
   }

   if(isset($_GET['edit_pro']))
   {
     include("edit_pro.php");
   }

    if(isset($_GET['view_cats']))
   {
     include("view_cats.php");
   }

   if(isset($_GET['edit_cat']))
   {
     include("edit_cat.php");
   }

   if(isset($_GET['del_cat']))
   {
     include("del_cat.php");
   }

    if(isset($_GET['insert_brand']))
   {
     include("insert_brand.php");
   }
     if(isset($_GET['insert_cat']))
   {
     include("insert_cat.php");
   }
   if(isset($_GET['view_brands']))
   {
     include("view_brand.php");
   }

   if(isset($_GET['edit_brand']))
   {
     include("edit_brand.php");
   }

    if(isset($_GET['del_brand']))
   {
     include("del_brand.php");
   }

    if(isset($_GET['view_customers']))
   {
     include("view_customers.php");
   }

    if(isset($_GET['del_customer']))
   {
     include("del_customer.php");
   }

    if(isset($_GET['logout']))
   {
     include("logout.php");
   }
   
  ?>
</div>

</div>
</div>	

   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>

<?php } ?>