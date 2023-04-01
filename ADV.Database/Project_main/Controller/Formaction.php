<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>

<?php 

		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$user=$_POST['uname'];
		$pass=$_POST['pass'];


		echo $joinday;
		
		if (empty($mname)or empty($lname) or empty($user) or empty($pass)) 
		{
			echo "Please fill up the form properly";
		}
		else 
		{
		
			$conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
			
    	}
		

$insert = oci_parse($conn, 'INSERT INTO HR.member (m_id,m_name,m_language,join_date) 
VALUES(HR.m_id_seq.nextval, :m_name, :m_language,sysdate)returning m_id into :id');


oci_bind_by_name($insert, ':m_name', $mname);
oci_bind_by_name($insert, ':m_language', $lname);
//oci_bind_by_name($insert, ':bind11', $joinday);
oci_bind_by_name($insert, ':id', $id);

$execute = oci_execute($insert);  


if ($execute) 
{
    //print "Row Inserted";
    $commit = oci_parse($conn, 'Commit');
	oci_execute($commit);
}

$rol='user';
$insert1 = oci_parse($conn, 'INSERT INTO HR.u_login(login_id,u_name,u_pass,u_role,M_ID) 
VALUES(HR.l_id_seq.nextval, :u_name, :pass,:rl,:mid)');


oci_bind_by_name($insert1, ':u_name', $user);
oci_bind_by_name($insert1, ':pass', $pass);
oci_bind_by_name($insert1, ':rl',$rol);
oci_bind_by_name($insert1, ':mid', $id);

$execute1 = oci_execute($insert1);  


if ($execute1) 
{
    //print "Row Inserted";
    $commit1 = oci_parse($conn, 'Commit');
	oci_execute($commit1);


	header("location:../view/login.php");
}

	


	?>		
</body>
</html>