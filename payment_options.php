<?php
include("include/dp.php");
session_start();
//include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>itemtech</title>
</head>
<body>
<div align="center" padding:"20px">
<h2>Payment Options For You!</h2>
<?php
$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_customer=mysqli_query($con,$get_customer);
$customer=mysqli_fetch_array($run_customer);
$customer_id=$customer['customer_id'];
?>
<h4>Pay With</h4><img src="img\paypal.jpg" width="200" height="80" ><h4>Or <a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Offline</a></h4> 
<p><b>if you selected pay offline option then please check your email or acacout to invoice No. for your order</b></p>
</div>
</body>

</html>