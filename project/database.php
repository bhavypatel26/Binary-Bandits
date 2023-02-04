<?php 



$servername= "localhost";
$username= "root";
$password="";
$database="login";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
die("Error deleting record:".mysqli_error($con));
}
?>
