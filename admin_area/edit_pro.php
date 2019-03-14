<?php
include("include/dp.php");
if(isset($_GET['edit_pro']))
{
$edit_id=$_GET['edit_pro'];

$get_edit="select * from product where product_id='$edit_id'";
$run_edit=mysqli_query($con,$get_edit);
$row_edit=mysqli_fetch_array($run_edit);

$update_id=$row_edit['product_id'];
$p_title=$row_edit['product_title'];
$cat_id=$row_edit['cat_id'];
$brand_id=$row_edit['brand_id'];
$p_img1=$row_edit['product_img1'];
$p_img2=$row_edit['product_img2'];
$p_img3=$row_edit['product_img3'];
$p_price=$row_edit['product_price'];
$p_desc=$row_edit['product_desc'];
$p_keywords=$row_edit['product_keyword'];
}

$get_cat="select * from categories where cat_id='$cat_id'";
$run_cat=mysqli_query($con,$get_cat);
$cat_row=mysqli_fetch_array($run_cat);
$cat_edit_title=$cat_row['cat_title'];

$get_brand="select * from brand where brand_id='$brand_id'";
$run_brand=mysqli_query($con,$get_brand);
$brand_row=mysqli_fetch_array($run_brand);
$brand_edit_title=$brand_row['brand_title'];

?>
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

<form method="post" action="index.php?insert_pro" enctype="multipart/form-data" style="align:center; color:black; font-size:15px;">
  &nbsp;
<table width="1000" align="center" border="1" >
   <tr align="center">       
      <td colspan="2"><b><h1 >Update or Edit Product</h1></b><br></td>
   </tr>
    &nbsp;
   <tr>
       <td align="right"><b>Product Title:</b></td>
      <td><input type="text" name="product_title" size="50" value="<?php echo $p_title; ?>"/></td>
   </tr>
   
   <tr>
       <td align="right"><b>Product Category:</b></td>
      <td>
         <select name="product_cat">
            <option value="<?php echo $cat_id; ?>"><?php echo $cat_edit_title; ?></option>
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
            <option value="<?php echo $brand_id; ?>"><?php echo $brand_edit_title;  ?></option>
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
      <td><input type="file" name="product_img1"/><img src="product_image/<?php echo $p_img1; ?>" width="70" height="70"></td>
   </tr>
   
   <tr>
       <td align="right"><b>Product Image2:</b></td>
      <td><input type="file" name="product_img2"/><img src="product_image/<?php echo $p_img2; ?>" width="70" height="70"></td>
   </tr>
   
   <tr>
       <td align="right"><b>Product Image3:</b></td>
      <td><input type="file" name="product_img3"/><img src="product_image/<?php echo $p_img3; ?>" width="70" height="70"></td>
   </tr>
   <tr>
       <td align="right"><b>Product Price:</b></td>
      <td><input type="text" name="product_price" value="<?php echo $p_price; ?>"/></td>
   </tr>
   <tr>
       <td align="right"><b>Product Description:</b></td>
      <td><textarea name="product_desc" cols="30" rows="10" value="<?php echo $p_desc; ?>"></textarea></td>
   </tr>
   <tr>
       <td align="right"><b>Product Keyword:</b></td>
      <td><input type="text" name="product_keyword" size="50" value="<?php echo $p_keywords; ?>"/></td>
   </tr>
   <tr align="center">
      <td colspan="2"><input type="submit" name="update" value="Update Product"/></td>
   </tr>
</table>
</form>

<?php
if(isset($_POST['update']))
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
    
  $update="update product set cat_id='$product_cat',
  brand_id='$product_brand',date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',
  product_price='$product_price',product_desc='$product_desc',product_keyword='$product_keyword' where product_id='$update_id'";
    
  $run_update=mysqli_query($con,$update);
    
  if($run_update)
  {
    echo "<script>alert('Product Updated Sucessfully')</script>";
     echo "<script>window.open('index.php?view_pro','_self')</script>";
  }
  
  
}
?>



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