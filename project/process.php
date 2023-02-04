<?php 
include 'database.php';

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="insert into users(email,password) values('$email' , '$password')";

	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('hell yeah!!')</script>";
		echo "<script>window.open('insert.php','_self')";
	}
	else{
		echo "error:".mysqli_error($con);
	}
	mysqli_close($con);
}
?>