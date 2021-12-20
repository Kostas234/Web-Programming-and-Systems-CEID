<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('Πρέπει να επιλεχθεί τουλάχιστον ένας υπάλληλος');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Επεξεργασία υπαλλήλων</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
<form method="post" action="update_mul.php">
<table class='table table-bordered' style=" background: #A9A9A9;">
<tr bgcolor="#008080">
<th>Username</th>
<th>Password</th>
<th>Κατάστημα</th>
<th>Πόλη</th>

</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$emplo2_id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM employees2 WHERE emplo2_id=".$emplo2_id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="emplo2_id[]" value="<?php echo $row['emplo2_id'];?>" />
		<input type="text" name="en[]" value="<?php echo $row['emplo2_name'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="ep[]" value="<?php echo $row['emplo2_pwd'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="ek[]" value="<?php echo $row['emplo2_kata'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="ec[]" value="<?php echo $row['emplo2_city'];?>" class="form-control" />
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="4">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Ενημέρωση στοιχείων</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; ακύρωση</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>