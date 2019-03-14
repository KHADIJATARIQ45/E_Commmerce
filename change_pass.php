
<div class="container">
<form action="" method="post" style="margin-bottom:120px; font:18px;">
  <h2 style="font-weight:bold; font-size:25px; font-style:serif; color:#862d86">Change Your Password</h2>
  <br />
  <div class="form-group">
    <label for="old">Enter Current Password:*</label>
    <input  type="password" id="old" class="form-control" name="old_pass" required >  
  </div>
  <div class="form-group">
   <label for="new">Enter New Password:*</label>
    <td><input  type="password" name="new_pass" id="new" class="form-control" required></td>  
 </div>
 <div class="form-group">
   <label for="again">Enter New Password Again:*</label>
   <input  type="password" name="new_pass_again" id="again" class="form-control" required></td>  
  </div>
  <input  type="submit"  class="btn btn-success btn-lg" name="change_pass" value="Change Password ">
</form>
</div>

<?php
include("include/dp.php");
$c=$_SESSION['customer_email'];

if(isset($_POST['change_pass']))
{
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$new_pass_again=$_POST['new_pass_again'];

$get_real_pass="select * form customers where customer_pass='$old_pass'";

$run_real_pass=mysqli_query($con,$get_real_pass);
$check_pass=mysqli_num_rows($run_real_pass);

if($check_pass==0)
{
  echo "<script>alert('Your Current Pasword is not Valid,Try Again!!!')</script>";
  exit();
}
if($new_pass!=$new_pass_again)
{
	echo "<script>alert('New Password didn't Match ,Try Again!!!')</script>";
  exit();
}
else
{
	 $update_pass="update customers set customer_pass='$new_pass' where customer_email='$c'";
	 $run_pass=mysqli_query($con,$update_pass);

	 echo "<script>alert('Your Password have been changed Sucessfully,Try Again!!!')</script>";
	 echo "<script>window.open('my_account.php','_self')</script>";
}

}

?>