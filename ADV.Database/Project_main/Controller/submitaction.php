<?php 

$pid = $_POST['pid'];
$ans= $_POST['ans'];


if (empty($pid)or empty($ans)) 
{
    echo "Please fill up the form properly";
    die();
}
else 
{

    $conn = oci_connect('SYSTEM', '1234', '//localhost/XE');
    
}

$mid=13;
$insert = oci_parse($conn, "insert into hr.submission values(hr.c_id_seq.nextval,$mid,$pid,to_date(sysdate,'dd-mm-yyyy'),0,'$ans')");

$execute = oci_execute($insert);  

if ($execute) 
{
header("Location: ../view/home.php");
}
?>