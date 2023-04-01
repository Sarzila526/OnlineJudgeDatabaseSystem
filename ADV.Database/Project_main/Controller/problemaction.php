<?php 

		$pname = $_POST['pname'];
		$cid = $_POST['cid'];
		$vno=$_POST['vno'];
		$pid=$_POST['pid'];
		
		if (empty($pname)or empty($cid) or empty($vno) or empty($pid)) 
		{
			echo "Please fill up the form properly";
		}
		else 
		{
		
			$conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
			
    	}
		

$insert = oci_parse($conn, 'BEGIN hr.Add_problem(:pname,:pid,:cid,:vno); END;');


oci_bind_by_name($insert, ":pname", $pname);
oci_bind_by_name($insert, ':pid', $pid);
oci_bind_by_name($insert, ':cid', $cid);
oci_bind_by_name($insert, ':vno', $vno);

$execute = oci_execute($insert);  

if ($execute) 
{
    header("Location: ../view/home.php");
}
	?>