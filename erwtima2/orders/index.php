<?php
	include_once 'dbcon.php';
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Προσθήκη Παραγγελίας</title>

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
 </body>
<div class="clearfix"></div><div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Προσθήκη Παραγγελίας</a>
<a href="http://localhost/project2017/erwtima2/index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>

</div>
<div class="container">
<form method="post" name="frm">
<table  class='table table-bordered table-responsive' style="width: 5em; font-size: 16px; background: #A9A9A9;"  >

<tr bgcolor="#008080">
<th >#</th>
<th>Κατάστημα Αποστολής</th>
<th>Πόλη Αποστολής</th>
<th>Ώρα</th>
<th>Κατάστημα Παραλαβής</th>
<th>Πόλη Παραλαβής</th>
<th>Track id</th>
<th>Απλή/Express</th>
<th>Εκτίμηση Χρόνου</th>
<th>Κόστος</th>
<th>QR code</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM orders");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['order_id']; ?>"  /></td>
			<td><?php echo $row['katasthma_ap']; ?></td>
			<td><?php echo $row['city_ap']; ?></td>
			<td><?php echo $row['time']; ?></td>
			<td><?php echo $row['katasthma_pa']; ?></td>
			<td><?php echo $row['city_pa']; ?></td>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['speed']; ?></td>
			<td><?php echo $row['wait']; ?></td>
			<td><?php echo $row['cost']; ?></td>

			<td><html><body><form><input type="button" width="100" onClick="window.open(<?php echo '&quot;'; echo $row['qr_code']; echo '&quot;'; ?>)" height="100%" value="QR"/></form></body></html></td>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="10"> Δεν βρέθηκαν παραγγελίες...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="11">
    <label><input type="checkbox" class="select-all" /> Επιλογή / Ακύρωση</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> επιλεγμένα :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />αλλαγή</span> 
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />διαγραφή</span>
    </label>
    
    
    </td>
	</tr>    
    <?php
}

?>

</table>
</form>
</div>
</body>
</html>







