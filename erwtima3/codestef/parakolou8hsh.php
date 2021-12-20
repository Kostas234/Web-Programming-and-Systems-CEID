<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>     

<header>
       <nav>
       	<div class="main-wrapper">
        <ul>
             <li><a href="../index.php">Αρχική σελίδα</a></li>
        </ul>
		</div>
	   </nav>
	   <div class="clearfix"></div><div class="container">
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			<h1 style = "margin-left: 41%" font-size: 34px;>Το σκανάρισμα έγινε επιτυχώς </h1>
			<a href="../index.php" class="btn btn-large btn-success" style = "margin-left: 44%"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
		<br/>
		<br/>
		<br/>
		</div>

<?php

	$polh=$_SESSION['city'];
	$theid=$_POST['theresult'];

	 $DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "";
	 $DB_name = "project2017";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
	 mysqli_query($MySQLiconn, 'SET CHARACTER SET utf8');
	 mysqli_query($MySQLiconn, 'SET COLLATION_CONNECTION=utf8_general_ci');
	$result = mysqli_query($MySQLiconn, "UPDATE orders SET locations=CONCAT(locations, '-$polh') WHERE track_id='$theid'");
	$result = mysqli_query($MySQLiconn, "UPDATE orders SET location='$polh' WHERE track_id='$theid'");


?>