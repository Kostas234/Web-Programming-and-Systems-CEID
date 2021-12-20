<?php
session_start();
include 'dbh.inc.php';

$emplo3_name = $_POST['emplo3_name'];
$emplo3_pwd = $_POST['emplo3_pwd'];
$emplo3_hub = $_POST['emplo3_hub'];

$sql = "SELECT * FROM emplo_transit2 WHERE emplo3_name='$emplo3_name' AND emplo3_pwd='$emplo3_pwd' AND emplo3_hub='$emplo3_hub' ";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    header("Location: index.php");
}else {
    $_SESSION['id'] = $row['emplo3_id'];
	header("Location: header.php");
}

?>
