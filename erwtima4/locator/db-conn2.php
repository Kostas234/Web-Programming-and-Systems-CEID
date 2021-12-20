<?php

$conn = mysqli_connect("localhost", "root", "","project2017");
mysqli_query($conn, 'SET CHARACTER SET utf8');
mysqli_query($conn, 'SET COLLATION_CONNECTION=utf8_general_ci');

if (!$conn) {
   die("Connection failed: ".mysqli_connect_error());
}
?>