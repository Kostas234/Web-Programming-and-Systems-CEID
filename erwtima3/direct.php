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
             <li><a href="index.php">Αρχική σελίδα</a></li>
        </ul>
        <div class="nav-login">
        <?php
   if (isset($_SESSION['id'])) {
      //echo $_SESSION['id'];
         echo "You are logged in!"; 
		 
   } else {
       echo "You are not logged in!";
   } 
   ?>
   <form action="logout.inc.php">
   <button>Logout </button>
        </div>
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
			<a style=" margin: 35% ; 
			width: 300px; 
			padding: 20px; 
			cursor: pointer; 
			box-shadow: 2px 2px 1px; #999; 
			-webkit-box-shadow: 2px 2px 1px #999; 
			-moz-box-shadow: 2px 2px 1px #999; 
			font-weight: bold; background: #008080; 
			color: #000; border-radius: 5px; 
			border: 1px solid #999;
			font-size: 140%;   " type="button" href="codestef" class="btn btn-large btn-info"> &nbsp; Σκανάρισμα παραγγελίας</a>
		<br/>
		<br/>
		<br/>
	
		<a href="index.php" class="btn btn-large btn-success" style = "margin-left: 41%"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
		</div>


</header>