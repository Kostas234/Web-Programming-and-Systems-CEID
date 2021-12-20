<?php
include_once 'dbcon.php';
$emplo2_id = $_POST['emplo2_id'];
$en = $_POST['en'];
$ep = $_POST['ep'];
$ek = $_POST['ek'];
$ec = $_POST['ec'];

$chk = $_POST['chk'];

$chkcount = count($emplo2_id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE employees2 SET emplo2_name='$en[$i]', emplo2_pwd='$ep[$i]', emplo2_kata='$ek[$i]', emplo2_city='$ec[$i]' WHERE emplo2_id=".$emplo2_id[$i]);
}
header("Location: index.php");
?>