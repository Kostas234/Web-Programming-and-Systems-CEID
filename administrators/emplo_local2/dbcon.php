<?php
	
	 $DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "";
	 $DB_name = "project2017";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
     mysqli_query($MySQLiconn, 'SET CHARACTER SET utf8');
	 mysqli_query($MySQLiconn, 'SET COLLATION_CONNECTION=utf8_general_ci');
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

?>