<?php
include("include/dp.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Area</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/2068589c33.js"></script>

 <!-- Custom styles for this template -->
    <link href="css/stt.css" rel="stylesheet">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
<form method="post" action="index.php?insert_pro" enctype="multipart/form-data" style="align:center; color:black; font-size:18px;">
  &nbsp;
   <h1 align="center" style="font-size:50px; color:black; font-family:serif;">Insert New Product</h1><br>
<table width="1000" align="center" border="1" >  	 
   <tr>
	   <td align="right"><b>Product Title:</b></td>
   	  <td><input type="text" name="product_title" size="50" required/></td>
   </tr>
   <tr>
	   <td align="right"><b>Product Category:</b></td>
   	  <td>
   	  	 <select name="product_cat" required>
   	  	 	<option>Select a category</option>
   	  	 	<?php
				$get_cats="select * from categories";
				$run_cats=mysqli_query($con,$get_cats);
         	while($row_cats=mysqli_fetch_array($run_cats))
			{
				$cat_id=$row_cats['cat_id'];
				$cat_title=$row_cats['cat_title'];
				echo "<option value='$cat_id'>$cat_title</option>";
			} 
         		?>
   	  	 	
   	  	 </select>
        
   	  </td>
   </tr>
   
   <tr>
	  <td align="right"><b>Product Brand:</b></td>
   	  <td>
   	  	<select name="product_brand" required>
   	  		<option>Select a Brand</option>
   	  		<?php
         	$get_cats="select * from brand";
				$run_cats=mysqli_query($con,$get_cats);
         	while($row_cats=mysqli_fetch_array($run_cats))
			{
				$brand_id=$row_cats['brand_id'];
				$brand_title=$row_cats['brand_title'];
				echo "<option value='$brand_id'>$brand_title</option>";
			} 
         		?>	
   	  	</select>
   	  </td>
   </tr>
   
   <tr>
	   <td align="right"><b>Product Image1:</b></td>
   	  <td><input type="file" name="product_img1" required/></td>
   </tr>
   
   <tr>
	   <td align="right"><b>Product Image2:</b></td>
   	  <td><input type="file" name="product_img2"/></td>
   </tr>
   
   <tr>
	   <td align="right"><b>Product Image3:</b></td>
   	  <td><input type="file" name="product_img3"/></td>
   </tr>
   <tr>
	   <td align="right"><b>Product Price:</b></td>
   	  <td><input type="text" name="product_price" required/></td>
   </tr>
   <tr>
	   <td align="right"><b>Product Description:</b></td>
   	  <td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
   </tr>
   <tr>
	   <td align="right"><b>Product Keyword:</b></td>
   	  <td><input type="text" name="product_keyword" size="50" required /></td>
   </tr>
   <tr align="center">
   	  <td colspan="2"><input type="submit" class="btn btn-lg btn-danger" name="insert_product" value="Insert Product"/></td>
   </tr>
</table>
</form>
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

<?php
if(isset($_POST['insert_product']))
{
   //text data variable
  $product_title=$_POST['product_title'];
  $product_cat=$_POST['product_cat'];
  $product_brand=$_POST['product_brand'];
  $product_price=$_POST['product_price'];
  $product_desc=$_POST['product_desc'];
  $status='on';
  $product_keyword=$_POST['product_keyword'];
  
  //img name
  $product_img1=$_FILES['product_img1']['name'];
  $product_img2=$_FILES['product_img2']['name'];
  $product_img3=$_FILES['product_img3']['name'];
	
  //img temp name
  $temp_name1=$_FILES['product_img1']['tmp_name'];	
  $temp_name2=$_FILES['product_img2']['tmp_name'];
  $temp_name3=$_FILES['product_img3']['tmp_name'];
	
  move_uploaded_file($temp_name1,"product_image/$product_img1");
  move_uploaded_file($temp_name2,"product_image/$product_img2");
  move_uploaded_file($temp_name3,"product_image/$product_img3");
		
  $insert_product="insert into product (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status) values('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$status')";
		
  $run_product=mysqli_query($con,$insert_product);
		
  if($run_product)
	{
	  echo "<script>alert('Product Inserted Sucessfully')</script>";
     echo "<script>window.open('index.php?insert_pro','_self')</script>";
	}
	
	
}
?>