<?php 
include 'database.php';

if(isset($_POST['signup']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	// mysqli_close($con);
}



// if(isset($_POST['l-s']))
// {
// 	$email=$_POST['email'];
// 	$password=$_POST['password'];

// 	$sql="insert into user(email,password) values('$email' , '$password')";

// 	if(mysqli_query($con,$sql))
// 	{
// 	}
// 	else{
// 		echo "error:".mysqli_error($con);
// 	}
// 	// mysqli_close($con);
// }
// ?>