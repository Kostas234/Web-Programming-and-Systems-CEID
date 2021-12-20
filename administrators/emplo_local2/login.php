<?php
session_start();
include 'dbh.php';

$admin_username = $_POST['admin_username'];
$admin_pwd = $_POST['admin_pwd'];


$sql = "SELECT * FROM admin WHERE admin_username='$admin_username' AND admin_pwd='$admin_pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "You are not logged in!!!";
}else {
    $_SESSION['id'] = $row['admin_id'];
}
header("Location: direct.php");
?>
