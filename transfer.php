<?php
include("connection.php");
error_reporting(0);

?>

<?php
if($_POST['submit'])
{
    $id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$account_no = $_POST['account_no'];
	$balance = $_POST['balance'];
	$query=mysqli_query($con,"update user set  name='$name',email='$email',account_no='$account_no', balance='$balance' where id='$id'");
if($query)
{
	echo "<script>alert('Your money successfully transfered, your transaction Id is: MXAJDHHJ27HD ');</script>";
    //header('location:user.php');

	
}
}
?>
<html>
<head>
<title>REGISTRATION FORM</title>
<center><body background="a.jpg">
<table border="2" align="center">
<form name="registration" method="POST" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>Transfer Money</h3></center>
<tr>
<th>ID</th>
<td><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/></br></td>
</tr>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value="<?php echo $_GET['name']; ?>"/></br></td>
</tr>

<tr>
<th>EMAIL:</th>
<td><input type="text" name="email" value="<?php echo $_GET['email']; ?>"/></br></td>
</tr>
<tr>
<th>ACCOUNT NO</th>
<td><input type="" name="account_no" value="<?php echo $_GET['account_no']; ?>"/></br></td>
</tr>
<tr>
<th>ENTER AMOUNT</th>
<td><input type="text" name="balance" value="<?php echo $_GET['balance']; ?>"/></br></td>
</tr>

<tr>
<th><input type="submit" name="submit" value="Transfer"></th>
<td><a href="user.php">see details</a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>