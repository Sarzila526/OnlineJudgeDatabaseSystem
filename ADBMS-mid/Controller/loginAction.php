<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>
<?php 
	
	$user=$_POST['uname'];
	$pass=$_POST['pass'];
		
//echo $user;
//echo $pass;
		if (empty($user) or empty($pass)) {
			echo "Please fill up the form properly";
		}
		else {
			
			
			$conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
		
			$s = oci_parse($conn, "select u_name,U_pass from HR.U_login where u_name='$user' and u_pass='$pass'");       
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
            if($row)
			{
				session_start();
					$_SESSION['username']=$user;
					header("Location: ../view/home.php");
			}
			else
			{
				echo "wrong password or username";
			}

			
		}

?>
</body>
</html>