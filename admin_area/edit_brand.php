<?php
include("include/dp.php");
if(isset($_GET['edit_brand']))
{
	$brand_edit_id=$_GET['edit_brand'];
	$edit_brand="select * from brand where brand_id='$brand_edit_id'";
	$run_edit=mysqli_query($con,$edit_brand);
	$row_edit=mysqli_fetch_array($run_edit);
	$brand_title=$row_edit['brand_title'];

}
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
    <link href="css/stt.css" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="fonts/font/css/font-awesome.min.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
<body>
&nbsp;

<form class="form-inline" method="post" action="" style="margin-top:150px; color:black; padding-left:380px;">
  <div class="form-group">
    <label><b>Edit This Brand:</b></label>
    <input type="text" class="form-control" name="brand_title1" id="brand_title1" value="<?php echo $brand_title;?>">
  </div>
  <button class="btn btn-primary" name="update_brand" id="update_brand" >Update Brand</button>
</form>

<?php
if(isset($_POST['update_brand']))
{
  $brand_title123=$_POST['brand_title1'];
  $update_brand="update brand set brand_title='$brand_title123' where brand_id='$brand_edit_id'";
  $edit_run=mysqli_query($con,$update_brand);
if($edit_run)
{
      echo "<script>alert('Brand Updated Sucessfully')</script>";
     echo "<script>window.open('index.php?view_brands','_self')</script>";
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
