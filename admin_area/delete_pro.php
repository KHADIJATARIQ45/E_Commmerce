<?php
include("include/dp.php");

if(isset($_GET['del_pro']))
{
  $del_id=$_GET['del_pro'];
  $delete_pro="delete from product where product_id='$del_id'";
  $run_del=mysqli_query($con,$delete_pro);
  if($run_del)
  {
  	echo "<script>alert('One Product Deleted!')</script>";
     echo "<script>window.open('index.php?view_pro','_self')</script>";
  }
}
?>