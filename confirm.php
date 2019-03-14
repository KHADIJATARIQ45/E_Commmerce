<?php
session_start();
include("include/dp.php");
if(isset($_GET['order_id']))
{
$order_id=$_GET['order_id'];
}
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Confirm Page</title>
</head>

<body bgcolor="black">
<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post">

<table width="500" align="center" border="2" bgcolor="#CCCCCC">

<tr align="center">
<td colspan="5"><h2>Please Confirm Your Payment!</h2></td>
</tr>

<tr>
<td align="right">Invoice No:</td>
<td><input type="text" name="invoice_no" required></td>
</tr>

<tr>
<td align="right">Amount Sent:</td>
<td><input type="text" name="amount" required></td>
</tr>

<tr>
<td align="right">Select Payment Mode:</td>
<td>
<select name="payment_method" required>
     <option>Select Payment</option>
     <option>Bank Transfer</option>
     <option>EasyPaisa/UBL Omni</option>
     <option>Western Union</option>
     <option>Paypal</option>
</select>
</td>
</tr>

<tr>
<td align="right">Transaction/Refrence ID</td>
<td><input type="text" name="tr" required></td>
</tr>

<tr>
<td align="right">EasyPaisa/UBLomni Code</td>
<td><input type="text" name="code" required></td>
</tr>

<tr>
<td align="right">Payment Date:</td>
<td><input type="text" name="date" required></td>
</tr>

<tr align="center">
<td colspan="5"><input type="submit" name="confirm" value="Confirm Payment"></td>
</tr>

</table>
</form>
</body>
</html>

<?php
if(isset($_POST['confirm']))
{
$update_id=$_GET['update_id'];
$invoice=$_POST['invoice_no'];
$amount=$_POST['amount'];
$pay_method=$_POST['payment_method'];
$ref_no=$_POST['tr'];
$code=$_POST['code'];
$date=$_POST['date'];
$comp='complete';

$insert_payment="insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice','$amount','$pay_method','$ref_no','$code','$date')";

$run_payment=mysqli_query($con,$insert_payment);
if($run_payment)
{
	echo "<h2 style='text-align:center; color:white;'>Payment Recieved!!Your order will be arrived within 24hours!</h2>";
}

$update_order="update customer_orders set order_status='$comp' where order_id='$update_id'";
$run_update=mysqli_query($con,$update_order);
}

?>