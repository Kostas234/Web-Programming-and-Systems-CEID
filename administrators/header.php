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

       <nav><!--οριζει navigation links-->
       	<div class="main-wrapper">
        <ul>
             <li><a href="index.php">Αρχική σελίδα</a></li>
        </ul>
        <div class="nav-login">
          <form action="login.inc.php" method="POST">
              <input type="text" name="admin_username" placeholder="username">
              <input type="text" name="admin_pwd" placeholder="password">
              <button  type="submit" name="submit" style=" font-size: 16px; background: #ccc; " >Login </button>

               <br/>
               <br/>

          </form>
    <?php
   if (isset($_SESSION['id'])) {
       if ($_SESSION['id'] == 1) {
        echo "Welcome administrator Kostas";
       }else if ($_SESSION['id'] == 2) {
        echo "Welcome administrator ThanL";
       } else if ($_SESSION['id'] == 3) {
       echo "Welcome administrator Trite";  
       }         
   } else {
       echo '<span style="color:#333399;text-align:center; font-size: 140%; ">!You are not logged in!';
   } 
   ?>
   <form action="logout.inc.php">
   <button style="width: 5em; font-size: 16px; background: #ccc;">Logout </button>
   </form>
        </div>
       	</div>
       </nav>


</header>