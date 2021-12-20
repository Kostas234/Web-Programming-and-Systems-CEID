<?php

session_start();

$polh=$_SESSION['city'];


$DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "";
	 $DB_name = "orders";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
	 
$result = mysqli_query($MySQLiconn, "UPDATE orders SET locations=CONCAT(locations, '-$polh') WHERE track_id='PA1504022823IO'");
$result = mysqli_query($MySQLiconn, "UPDATE orders SET location='$polh') WHERE track_id='PA1504022823IO'");
$result = mysqli_query($MySQLiconn, "SELECT locations FROM orders WHERE track_id='PA1504022823IO'");
$row = mysqli_fetch_assoc($result);
echo "<br>";
echo $row['locations'];
echo $polh;

echo $_POST['theresult'];

?>