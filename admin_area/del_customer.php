<?php
include("include/dp.php");

if(isset($_GET['del_customer']))
{
  $del_id=$_GET['del_customer'];
  $delete_customer="delete from customers where customer_id='$del_id'";
  $run_del=mysqli_query($con,$delete_customer);
  if($run_del)
  {
  	echo "<script>alert('One Customer Deleted!')</script>";
     echo "<script>window.open('index.php?view_customers','_self')</script>";
  }
}
?>