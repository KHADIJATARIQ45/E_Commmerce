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
<div class="container-fluid">
&nbsp;
<?php  if(isset($_GET['view_brands'])) {   ?>
<table class="table" width="800" style="color:black; font-size:22px;">
<thead>
   <h1 style="text-align:center; font-size:50px; color:black; font-family:serif;">View All Brands</h1><br><br>
    <tr>
        <th><b>Brand ID</b></th>
        <th><b>Brand Title</b></th>
        <th><b>Edit</b></th>
        <th><b>Delete</b></th>
    </tr>
</thead>
<tbody>
<?php
include("include/dp.php");

$get_brand="select * from brand";
$run_brand=mysqli_query($con,$get_brand);

while($row_brand=mysqli_fetch_array($run_brand))
{
   $brand_id=$row_brand['brand_id'];
   $brand_title=$row_brand['brand_title'];
   ?>
<tr>
<td><?php echo $brand_id;  ?></td>
<td><?php echo $brand_title; ?></td>
<td><button  type="button" class="btn btn-primary"><a href="index.php?edit_brand=<?php echo $brand_id; ?>" style="text-decoration:none;color:black;">EDIT</a></button></td>
<td><button  type="button" class="btn btn-danger"><a href="index.php?del_brand=<?php echo $brand_id; ?>"  style="text-decoration:none;color:black;">DELETE</a></button></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php
}
?>
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