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
	$d=$_POST['remember'];
	//echo $d;
	
//echo $user;
//echo $pass;
		if (empty($user) or empty($pass)) {
			echo "Please fill up the form properly";
		}
		else {
			
			
			$conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
			
			$s = oci_parse($conn, "select u_name,U_pass,m.m_id from HR.U_login l,HR.member m where u_name='$user' and u_pass='$pass'and l.m_id=m.m_id");       
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
			$id=13;
//var_dump($res);
//$n=json_encode($res);
//echo $n[2];
//echo $n;
//die();
            if($row==1)
			{
				if($d)   
   						{  

   							setcookie ("user",$user,time()+ (10 * 365 * 24 * 60 * 60),"/");  
    						setcookie ("pass",$pass,time()+ (10 * 365 * 24 * 60 * 60),"/");
   							 
   						}  
   				else  
   				{  
   							
    				if(isset($_COOKIE["user"]))   
    					{  
     						setcookie ("user","",time()- (10 * 365 * 24 * 60 * 60),"/");  
    					}  
    				if(isset($_COOKIE["pass"]))   
    				{  
     					setcookie ("pass","",time()- (10 * 365 * 24 * 60 * 60),"/");  
    				}  
  				}  
				session_start();
				$_SESSION['username']=$user;
				$_SESSION['ID']=$id;
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