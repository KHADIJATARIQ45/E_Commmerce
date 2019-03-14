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
<div class="container_fluid">
<div class="table-responsive">          
<table class="table" width="800" style="color:black; font-size:22px;">
<h1 style="text-align:center; font-size:50px; color:black; font-family:serif;">View All Customers</h1><br><br>
<thead>
 <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
    <th>Country</th>
    <th>Delete</th>
 </tr>
</thead>
<tbody>
<?php
include("include/dp.php");
$get_c="select * from customers";
$run_c=mysqli_query($con,$get_c);
while($row_c=mysqli_fetch_array($run_c))
{
   $c_id=$row_c['customer_id'];
   $c_name=$row_c['customer_name'];
   $c_email=$row_c['customer_email'];
   $c_image=$row_c['customer_image'];
   $c_country=$row_c['customer_country'];

?>
      <tr>
        <td><?php echo $c_id; ?></td>
        <td><?php echo $c_name; ?></td>
        <td><?php echo $c_email; ?></td>
        <td><img src="customer/customer_photos/<?php echo $c_image; ?>" width="50" height="50"></td>
        <td><?php echo $c_country; ?></td>
        <td><button  type="button" class="btn btn-danger"><a href="index.php?del_customer=<?php echo $c_id; ?>"  style="text-decoration:none;color:black;">DELETE</a></button></td>

       </tr>
       <?php } ?>
    </tbody>
  </table>
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