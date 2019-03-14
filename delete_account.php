<div class="panel-group">
  <div class="panel panel-default">
  <div class="panel-heading">
  <h4><b>Delete Your Account</b></h4>
  </div>
  <div class="panel-body">
  <h3 style="font-weight:bold; text-align:center;">Do You want to delete Your Account?</h3>
  <form method="post" action="">
  <div class="form-group text-center">
  <input class="btn btn-primary text-center" type="submit" name="yes" value="YES" style="margin-right:20px; margin-top:20px;">
   <input  class="btn btn-danger text-center"type="submit" name="no" value="NO" style="margin-right:20px; margin-top:20px;">
  </div>
  </form> 
  </div>
  </div>
  </div>
<?php
include("include/dp.php");
$c=$_SESSION['customer_email'];

if(isset($_POST['yes']))
{
$delete_customer="delete from customers where customer_email='$c'";
$run_del=mysqli_query($con,$delete_customer);

if($run_del)
{
   echo "<script>alert('Your Account has been deleted !!!')</script>";
   echo "<script>window.open('index.php','_self')</script>";
}
}
if(isset($_POST['no']))
{
  echo "<script>window.open('my_account.php','_self')</script>"; 
}
?>