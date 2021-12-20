<?php
	include_once 'dbcon.php';
?>
<!DOCTYPE html PUBLIC>
<head>

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<br/>
<br/>
<br/>
<br/>
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
<body>
<div class="clearfix"></div><div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Προσθήκη Υπαλλήλου</a>
<a href ="Javascript:window.location.href = 'http://localhost/project2017/administrators/direct.php';" class="btn btn-large btn-info"><i class="glyphicon glyphicon" ></i> &nbsp; Επιστροφή στις επιλογές</a>
</div>
<div class="container">
<form method="post" name="frm">
<table class='table table-bordered table-responsive' style=" background: #A9A9A9;" >

<tr bgcolor="#008080">
<th>#</th>
<th>Username</th>
<th>Password</th>
<th>Κατάστημα</th>
<th>Πόλη</th>
</tr>
<?php
	//header('Content-Type: text/html; charset=utf-8'); 
	//$MySQLiconn->set_charset("utf8");
	$res = $MySQLiconn->query("SELECT * FROM employees2");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['emplo2_id']; ?>"  /></td>
			<td><?php echo $row['emplo2_name']; ?></td>
			<td><?php echo $row['emplo2_pwd']; ?></td>
			<td><?php echo $row['emplo2_kata']; ?></td>
			<td><?php echo $row['emplo2_city']; ?></td>
			</tr>
			<?php
		}	
	}
	else
	{
		?>
        <tr>
        <td colspan="5"> Δεν βρέθηκαν υπάλληλοι...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="5">
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