<?php
session_start(); 
if(count($_SESSION)===0)
{
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="home_style.css">
</head>
<body>
<h1>HOME PAGE</h1>

<p><h2>Welcome,<?php echo $_SESSION['username'] ?> </h2></p>
<br><br>

<a href="Logout.php"><button type="button" style="background-color:#ff1a1a;">LOGOUT</button></a>



</body>
</html>