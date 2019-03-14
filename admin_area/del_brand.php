<?php
include("include/dp.php");

if(isset($_GET['del_brand']))
{
  $del_id=$_GET['del_brand'];
  $delete_brand="delete from brand where brand_id='$del_id'";
  $run_del=mysqli_query($con,$delete_brand);
  if($run_del)
  {
  	echo "<script>alert('One Brand Deleted!')</script>";
     echo "<script>window.open('index.php?view_brands','_self')</script>";
  }
}
?>