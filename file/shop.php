<?php
include("include/dp.php");
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>mypage</title>
<?php echo '<link rel="stylesheet" href="css/style.css" media="all"/>';?>

</head>
<BODY>
	<!--main content-->
<div class="main_wrapper">
  <!--header content-->
  <div class="header_wrapper">
      <img src="myshop/img/shoplogo.jpg" style="float:left;">
      <img src="myshop/img/ad.jpg" style="float:right;">


   </div>
   <!--header content end-->

    <!--navbar start-->
	<div id="navbar">
         <ul id="menu">
           <li><a href="#">Home</a></li>
           <li><a href="#">All Product</a></li>
           <li><a href="#">My Account</a></li>
           <li><a href="#">Sign Up</a></li>
           <li><a href="#">Shopping Cart</a></li>
           <li><a href="#">Contact Us</a></li>
         </ul>
         
         <div id="form">
         	<form method="get" enctype="multipart/form-data" action="results.php">
         		<input type="text" name="user_query" placeholder="Search a Product"/>
         		<input type="submit" name="search" value="Search"/>
         	</form>
         </div>
         
	</div>
	<!--nav end-->
	<!--content start-->
	<div class="content_wrapper">
         <div id="left_sidebar">
         	<div id="sidebar_title">
         		CATEGORIES
         	</div>
         	
         	<ul id="cats">
         	<?php
				$get_cats="Select * from categories";
				$run_cats=mysqli_query($con,$get_cats);
         	while($row_cats=mysqli_fetch_array($run_cats))
			{
				$cat_id=$row_cats['cat_id'];
				$cat_title=$row_cats['cat_title'];
				echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
			} 
         		?>
         	</ul>
         	<div id="sidebar_title">
         		BRANDS
         	</div>
         	<ul id="cats">
         		<li><a href="#">Motorola</a></li>
         		<li><a href="#">Nokia</a></li>
         		<li><a href="#">Dell</a></li>
				<li><a href="#">Hp</a></li>
        	    <li><a href="#">Sony</a></li> 
         	</ul>
         	
         </div>
         
               
         <div id="right content"></div>


    </div>
    <!--content end-->
    <!--footer start-->
    <div class="footer">
    <h1 style="color: black; padding-top: 30px; text-align: center">&copy;2014 by www.ustadonline.com</h1>
    </div>
    <!--footer end-->
</div>
<!--main content end-->
</BODY>
</html>