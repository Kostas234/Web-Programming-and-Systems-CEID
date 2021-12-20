<?php

$conn = mysqli_connect("localhost", "root", "","administrators");

if (!$conn) {
   die("Connection failed: ".mysqli_connect_error());
}
?>