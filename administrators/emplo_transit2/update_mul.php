<?php
include_once 'dbcon.php';
$emplo3_id = $_POST['emplo3_id'];
$en = $_POST['en'];
$ep = $_POST['ep'];
$et = $_POST['et'];
$ec = $_POST['ec'];
$chk = $_POST['chk'];
$chkcount = count($emplo3_id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE emplo_transit2 SET emplo3_name='$en[$i]', emplo3_pwd='$ep[$i]', emplo3_hub='$et[$i]', emplo3_city='$ec[$i]' WHERE emplo3_id=".$emplo3_id[$i]);
}
header("Location: index.php");
?>