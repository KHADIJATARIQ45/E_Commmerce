<?php
session_start();
include("include/dp.php");
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

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/log.css" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="fonts/font/css/font-awesome.min.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
  
  </head>
<body>
   <div class="container">
        <div class="card card-container">
            <h2 align="center">Welcome Admin!</h2>
            &nbsp;
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <input type="email" id="admin_email" name="admin_email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="admin_pass" name="admin_pass" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="login" name="login" >LogIn</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->

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
<?php
if(isset($_POST['login']))
{
$admin_email=$_POST['admin_email'];
$admin_pass=$_POST['admin_pass'];

$sel_admin="select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
$run_admin=mysqli_query($con,$sel_admin);
$check_admin=mysqli_num_rows($run_admin);
if($check_admin==1)
{
    $_SESSION['admin_email']=$admin_email;
    echo "<script>window.open('index.php?logged_in=YOU SUCESSFULLY LOGGEDIN!','_self')</script>";
   
}
else
{
     echo "<script>alert('Email Or Password Incorrect!')</script>";
}
}
?>