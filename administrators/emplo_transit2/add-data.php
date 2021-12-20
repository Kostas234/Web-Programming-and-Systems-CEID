<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
		$en = $_POST["ename$i"];
		$ep = $_POST["epwd$i"];
		$et = $_POST["ethub$i"];
		$ec = $_POST["ecity$i"];
		$sql="INSERT INTO emplo_transit2(emplo3_name,emplo3_pwd,emplo3_hub,emplo3_city) VALUES('".$en."','".$ep."','".$et."','".$ec."')";
		$sql = $MySQLiconn->query($sql);		
	
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo "η προσθήκη έγινε"; ?>');
		window.location.href='index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('σφάλμα κατά την εισαγωγή των στοιχείων , ΠΡΟΣΠΑΘΗΣΕ ΞΑΝΑ');
		</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Προσθήκη Υπαλλήλου</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>
 <body>
<style>
body {
    background-color: #ccc
}
</style>
<br/>
<br/>
<br/>
<br/>
<body>
<div class="clearfix"></div>
<div class="clearfix"></div><br />

<div class="container">

    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered' style=" background: #A9A9A9;">
	<tr bgcolor="#008080">
    <th>#</th>
    <th>Username</th>
    <th>Password</th>
	<th>Transit Hub</th>
	<th>Πόλη</th>
	</tr>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="ename<?php echo $i; ?>" placeholder="username" class='form-control' /></td>
        <td><input type="text" name="epwd<?php echo $i; ?>" placeholder="password" class='form-control' /></td>
		<td><input type="text" name="ethub<?php echo $i; ?>" placeholder="transit hub" class='form-control' /></td>
 		<td><input type="text" name="ecity<?php echo $i; ?>" placeholder="πόλη" class='form-control' /></td>       
    <tr>
    <td colspan="5">    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Εισαγωγή του Υπαλλήλου</button> 
    <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
    
</div>
</body>
</html>