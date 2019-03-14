<?php
include("include/dp.php");

if(isset($_GET['del_cat']))
{
  $del_id=$_GET['del_cat'];
  $delete_cat="delete from categories where cat_id='$del_id'";
  $run_del=mysqli_query($con,$delete_cat);
  if($run_del)
  {
  	echo "<script>alert('One Ctaegory Deleted!')</script>";
     echo "<script>window.open('index.php?view_cats','_self')</script>";
  }
}
?>