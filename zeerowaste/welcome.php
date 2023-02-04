<?php 
     session_start();
     if (empty($_SESSION["name"])) {
     	header("location: index.php");
     	exit;
     }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body align = "center">
	<h1>Hi, <?php echo htmlspecialchars($_SESSION["name"]); ?></h1>

	<h2><a href="signout.php">Sign Out</a></h2>

</body>
</html>