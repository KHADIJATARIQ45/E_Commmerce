<?php
include("include/dp.php");
include("functions/functions.php");
//getting customer id
if($_GET['c_id'])
{
$customer_id=$_GET['c_id'];
$c_email="select * from customers where customer_id='$customer_id'";
$run_email=mysqli_query($con,$c_email);
$row_email=mysqli_fetch_array($run_email);
$customer_email=$row_email['customer_email'];
$customer_name=$row_email['customer_name'];
}	
 
   $ip_add=getUserIP();
   $total=0;
   $sel_price="select * from cart where ip_add='$ip_add'";
   $run_price=mysqli_query($con,$sel_price);
   $status='pending';
   $invoice_no=mt_rand();
   $i=0;
   $count_pro=mysqli_num_rows($run_price);
   while ($record=mysqli_fetch_array($run_price)) 
   {
   	 $pro_id=$record['p_id'];
   	 $pro_price="select * from product where product_id='$pro_id'";
   	 $run_pro_price=mysqli_query($con,$pro_price);
     while ($p_price=mysqli_fetch_array($run_pro_price)) 
     {

       $Product_name=$p_price['Product_title'];
       $product_price=array($p_price['product_price']);
       $values=array_sum($product_price);
       $total+=$values;
       $i++;
     }
     
   }


//getting quantity from cart
$get_cart="select * from cart";
$run_cart=mysqli_query($con,$get_cart);
$get_qty=mysqli_fetch_array($run_cart);
$qty=$get_qty['qty'];
if($qty==0)
{
	$qty=1;
	$sub_total=$total;
}
else
{
	$qty=$qty;
	$sub_total=$total*$qty;
}

$insert_order="insert into customer_orders (customer_id,due_amount,invoice_no,total_products,order_date,order_status) 
values ('$customer_id','$sub_total','$invoice_no','$count_pro',NOW(),'$status')";

  $run_order=mysqli_query($con,$insert_order);

   $insert_pending="insert into pending_orders (customer_id,invoice_no,product_id,qty,order_status) 
   values ('$customer_id','$invoice_no','$pro_id','$qty','$status') ";
  $run_pending_orders=mysqli_query($con,$insert_pending);

	echo "<script>alert('0rder Sucessfully Submitted!Thank You...')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";

	$empty_cart="delete from cart where ip_add='$ip_add'";
	$run_empty=mysqli_query($con,$empty_cart);
  
/*$from='admin@mysite.com';
$subject='Your Password';
$message="
    <html>
      <p>Hello dear<b style='color:blue;'>$customer_name</b> You have ordered some products on our website mysite.com,plz find your order Details
      below and pay the dues as soon as possible.Thank you!</p>
      <table width='600' align='center' border='2' bgcolor='#FFCC99' >
      <tr><td><h2>Your Order Details from mysite.com</h2></td></tr>
       
      <tr>
      <th>S.N</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th>Invoice No</th>
      </tr>

      <tr>
      <td>$i</td>
      <td>$Product_name</td>
      <td>$qty</td>
      <td>$sub_total</td>
      <td>$invoice_no</td>
      </tr>
      </table>
      
      <h3>Please go to your account and pay the dues</h3>
      <h2><a href='#'>click here</a>to login the account!</h2>
      <h3>Thank You for Order on mysite.com</h3>
      </html> ";
      
      mail($customer_email,$subject,$message,$from);	*/

?>