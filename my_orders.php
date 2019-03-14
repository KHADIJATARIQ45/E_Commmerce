<?php
include("include/dp.php");
@session_start();
//getting the customer id
    $cust=$_SESSION['customer_email'];
	$get_c="select * from customers where customer_email='$cust'";
	$run_c=mysqli_query($con,$get_c);
	$row_c=mysqli_fetch_array($run_c);
	$customer_id=$row_c['customer_id'];
?>
<hr>
<div class="container">
<table class="table" style="margin-bottom:300px;">
<thead   style="font-weight:bold; font-size:20px; background:#800080; color: white;">  
<tr>
<th>Order No</th>
<th>Due Amount</th>
<th>Inovoice No</th>
<th>Total Products</th>
<th>Order Date</th>
<th>Piad/Unpaid</th>
<th>Status</th>
</tr>
</thead>  
<?php
$get_order="select * from customer_orders where customer_id='$customer_id'";
$run_orders=mysqli_query($con,$get_order);
$i=0;
while ($row_orders=mysqli_fetch_array($run_orders)) 
{
	$order_id=$row_orders['order_id'];
	$due_amount=$row_orders['due_amount'];
	$invoice_no=$row_orders['invoice_no'];
	$products=$row_orders['total_products'];
	$date=$row_orders['order_date'];
	$status=$row_orders['order_status'];
     
    if($status=='pending')
    {
      $status='Unpaid';
    }
    else
    {
      $status='Paid';
    }
   
	$i++;
	echo "
    <tbody style='font-weight:bold; font-size:18px; background:##ffb3ff; color:black;'>
    <tr>
    <td>$i</td>
    <td>$due_amount</td>
    <td>$invoice_no</td>
    <td>$products</td>
    <td>$date</td>
    <td>$status</td>
    <td><a href='confirm.php?order_id=$order_id'>Confirm if paid</a></td>
    </tr>
    </tbody>
	";

}
?>
</table>
</div>