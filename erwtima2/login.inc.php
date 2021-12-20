<?php
session_start();
include 'dbh.inc.php';

$emplo2_name = $_POST['emplo2_name'];
$emplo2_pwd = $_POST['emplo2_pwd'];
$emplo2_kata = $_POST['emplo2_kata'];

$sql = "SELECT * FROM employees2 WHERE emplo2_name='$emplo2_name' AND emplo2_pwd='$emplo2_pwd' AND emplo2_kata='$emplo2_kata' ";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    header("Location: index.php");
}else {
    $_SESSION['id'] = $row['emplo2_id'];
	header('Location: direct.php');
}

?>
