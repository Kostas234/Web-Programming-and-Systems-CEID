<?php
$idIn=NULL;
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Παρακολούθηση Παραγγελίας</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>
		<label for="idInput">ID παραγγελίας</label>
		<form method="POST" action=" ">
		<input type="text" name="idInput" placeholder="ID"  valsize="15"/> 
		<input type="submit"  />
		</form>
		<?php 
		
		
		if (empty($_POST["idInput"])){
		}		
		else{
		$idIn=$_POST["idInput"];
		}
		$DB_host = "localhost";
		$DB_user = "root";
		$DB_pass = "";
		$DB_name = "project2017";	 
		$MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
		mysqli_query($MySQLiconn, 'SET CHARACTER SET utf8');
	    mysqli_query($MySQLiconn, 'SET COLLATION_CONNECTION=utf8_general_ci');
		$result = mysqli_query($MySQLiconn, "SELECT location FROM orders WHERE track_id='$idIn'");
		$row = mysqli_fetch_assoc($result);
		
		?>	</br>
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
<a href="http://localhost/project2017/erwtima2/index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>

</div>
<div class="container">
<form method="post" name="frm">
<table  class='table table-bordered table-responsive' style="width: 5em; font-size: 16px; background: #A9A9A9;"  >

<tr bgcolor="#008080">
<th >#</th>
<th>Κατάστημα Αποστολής</th>
<th>Πόλη Αποστολής</th>
<th>Κατάστημα Παραλαβής</th>
<th>Πόλη Παραλαβής</th>
<th>Track id</th>
<th>Εκτίμηση Χρόνου</th>
<th>Διαδρομή</th>
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM orders WHERE track_id='$idIn'");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>

			<tr>
			<td><?php echo $row['order_id']; ?></td>
			<td><?php echo $row['katasthma_ap']; ?></td>
			<td><?php echo $row['city_ap']; ?></td>
			<td><?php echo $row['katasthma_pa']; ?></td>
			<td><?php echo $row['city_pa']; ?></td>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['wait']; ?></td>
			<td><?php echo $row['locations']; ?></td>
			</tr>
			<?php
			}	
	}
	else
	{
		?>
        <tr>
        <td colspan="8"> Δεν βρέθηκαν παραγγελίες...</td>
        </tr>
        <?php
	}
?>
			
	<tr>
    <td colspan="8">
    </td>
	</tr>  
</table>
</form>
</div>
</body>
</html>