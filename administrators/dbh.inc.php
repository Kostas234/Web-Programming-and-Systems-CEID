<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "project2017";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
mysqli_query($conn, 'SET CHARACTER SET utf8');
mysqli_query($conn, 'SET COLLATION_CONNECTION=utf8_general_ci');