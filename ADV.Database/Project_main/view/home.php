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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<h1>HOME PAGE</h1>

<p><h2>Welcome,<?php echo $_SESSION['username'] ?> </h2></p>
<br>
<table class="table table-dark">
<tr>
    <th>Problem Id</th>
    <th>Volume No</th>
    <th>Problem Name</th>
    <th>Assigned Date</th>
</tr>

<?php
   $conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
  $s = oci_parse($conn, "select * from HR.problem");       
  oci_execute($s);
$i=0;
while($item=oci_fetch_array($s)) {
?>
	<tr>
		<td><?php echo $item['P_ID'] ?></td>
     <td><?php echo $item['VOLUME_NO'] ?></td>
     <td><?php echo $item['P_NAME'] ?></td>
     <td><?php echo $item['P_ASSIGNED_DATE'] ?></td>
	</tr>
<?php
$i++;
}
?>

</table>
<a href="http://localhost/project_test/view/submission.php">SUBMIT A PROBLEM!</a>
<br><br>
<a href="http://localhost/project_test/view/problem.php">ADD PROBLEM!</a>
<br><br>
<a href="http://localhost/ide/ui/ide.php" target="_blank">open Compiler!</a>
<br><br>
<a href="Logout.php"><button type="button" style="background-color:#ff1a1a;">LOGOUT</button></a>



</body>
</html>