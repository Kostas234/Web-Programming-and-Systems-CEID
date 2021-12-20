<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('Πρέπει να επιλεχθεί τουλάχιστον μια παραγγελία');
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
<title>Επεξεργασία Παραγγελίας</title>
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
<div class="clearfix"></div>
<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update_mul.php">
<table  class='table table-bordered table-responsive' style="width: 5em; font-size: 16px; background: #A9A9A9;"  >
<tr bgcolor="#008080">
<th>Κατάστημα Αποστολής</th>
<th>Πόλη Αποστολής</th>
<th>Κατάστημα Παραλαβής</th>
<th>Πόλη Παραλαβής</th>
<th>Απλή/Express</th>

</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$order_id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM orders WHERE order_id=".$order_id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="order_id[]" value="<?php echo $row['order_id'];?>" />
		<input type="text" name="kap[]" value="<?php echo $row['katasthma_ap'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="pap[]" value="<?php echo $row['city_ap'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="kpa[]" value="<?php echo $row['katasthma_pa'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="ppa[]" value="<?php echo $row['city_pa'];?>" class="form-control" />
		</td>
		<td>
		<input type="text" name="sp[]" value="<?php echo $row['speed'];?>" class="form-control" />
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