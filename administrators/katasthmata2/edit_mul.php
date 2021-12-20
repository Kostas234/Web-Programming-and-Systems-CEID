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
<title>Επεξεργασία καταστημάτων</title>
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
<th>Όνομα</th>
<th>Οδός</th>
<th>Αριθμός</th>
<th>Πόλη</th>
<th>ΤΚ</th>
<th>Τηλέφωνο</th>
<th>Transit Hub</th>
<th>Latitude</th>
<th>Longtitude</th>

</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$kata_id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM katasthmata WHERE kata_id=".$kata_id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="kata_id[]" value="<?php echo $row['kata_id'];?>" />
		<input type="text" name="kn[]" value="<?php echo $row['name'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="ks[]" value="<?php echo $row['street'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="knm[]" value="<?php echo $row['number'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="kc[]" value="<?php echo $row['city'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="ktk[]" value="<?php echo $row['TK'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="kt[]" value="<?php echo $row['tel'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="kh[]" value="<?php echo $row['hub'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="klt[]" value="<?php echo $row['lat'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="kln[]" value="<?php echo $row['lng'];?>" class="form-control" />
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="9">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Ενημέρωση στοιχείων</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; ακύρωση</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>