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
    <link href="css/stt.css" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="fonts/font/css/font-awesome.min.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
<body>
&nbsp;

<form class="form-inline" method="post" style="margin-top:150px; color:black; padding-left:380px;">
  <div class="form-group">
    <label><b>Insert New Category:</b></label>
    <input type="text" class="form-control" id="cat_title" name="cat_title">
  </div>
  <input type="submit" class="btn btn-primary" name="insert_cat" id="insert_cat" value="Insert Category">
</form>
<?php

if(isset($_POST['insert_cat']))
{
  $cat_title=$_POST['cat_title'];
  $insert_cat="insert into categories (cat_title) values ('$cat_title')";
  $cat_run=mysqli_query($con,$insert_cat);
if($cat_run)
{
      echo "<script>alert('Inserted Category Sucessfully')</script>";
     echo "<script>window.open('index.php?view_cats','_self')</script>";
}

}
?>
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

