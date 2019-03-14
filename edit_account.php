<?php
@session_start();
include("include/dp.php");
if(isset($_GET['edit_account']))
{
    $customer_email=$_SESSION['customer_email'];
	$get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($con,$get_customer);
	$row=mysqli_fetch_array($run_customer);

  $id=$row['customer_id'];
  $name=$row['customer_name'];
  $email=$row['customer_email'];
  $pass=$row['customer_pass'];
  $country=$row['customer_country'];
  $city=$row['customer_city'];
  $contact=$row['customer_contact'];
  $address=$row['customer_address'];
  $image=$row['customer_image'];

}

?>
           
           <div class="container">
           <form action="" method="post" enctype="multipart/form-data" style="margin-bottom:120px; font:18px;">
            <h2 style="font-weight:bold; font-size:25px; font-style:serif; color:#862d86">Update Your Account:</h2>
            <br />
            <div class="form-group">
            <label for="name">Customer Name:</label>
            <input  type="text" id="name" class="form-control" name="c_name" value="<?php echo $name; ?>">  
            </div>
            <div class="form-group">
            <label for="email">Customer Email:</label>  
            <td><input  type="text" name="c_email" id="email" class="form-control" value="<?php echo $email; ?>"></td>  
            </div>
            <div class="form-group">
            <label for="pass">Customer Password:</label> 
            <td><input  type="password" name="c_pass" id="pass" class="form-control" value="<?php echo $pass; ?>"></td>  
            </div>
            <div class="form-group">
            <label for="pass">Customer Country:</label> 
            <select name="c_country" disabled>
              <option value="<?php echo $country ?>"><?php echo $country ?></option>
              <option>Afghanistan</option>
              <option>Chhina</option>
              <option>India</option>
              <option>Iran</option>
              <option>Japan</option>
              <option>Pakistan</option>
              <option>Saudia Arabia</option>
              <option>United Arab Emirates</option>
              <option>United Stated America</option>
              <option>United Kingdom</option>
            </select>
            </div>
            <div class="form-group">
            <label for="city">Customer City:</label> 
            <input  type="text" name="c_city" id="city" class="form-control" value="<?php echo $city; ?>">  
            </div>
            <div class="form-group">
            <label for="num">Customer Mobile No.:</label> 
            <input  type="int" name="c_contact" id="city" class="form-control" value="<?php echo $contact; ?>"> 
            </div>
             <div class="form-group">
            <label for="add">Customer Address:</label>
            <input  type="text" name="c_address" id="add" class="form-control" value="<?php echo $address; ?>">  
            </div>
            <div class="form-group">
            <label for="img">Customer Image:</label>
            <input  type="file" name="c_image" id="img" size="60"><img src="customer/customer_photos/<?php echo $image;?>" height="50" width="80">
            </div>
            <input  class="btn btn-success btn-lg" type="submit" name="update_account" value="Update Now">
            </form>
            </div>


<?php
if(isset($_POST['update_account']))
{
  $update_id=$id;
  $c_name=$_POST['c_name'];
  $cus_email=$_POST['c_email'];
  $c_pass=$_POST['c_pass'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];
  $c_image=$_FILES['c_image']['name'];
  $c_image_tmp=$_FILES['c_image']['tmp_name'];
  
  move_uploaded_file($c_image_tmp,"customer/customer_photos/$c_image");

  $update_c="update customers set customer_name='$c_name',customer_email='$c_email',customer_pass='$c_pass',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image'
  where customer_id='$update_id'";
  $run_c=mysqli_query($con,$update_c);

  if($run_c)
  {                                                     
   echo "<script>alert('Your Account has been Updated!')</script>";
   echo "<script>window.open('my_accout.php','_self')</script>";
  }
}
?>



