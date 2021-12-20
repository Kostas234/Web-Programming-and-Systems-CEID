<?php
	
	error_reporting(0);
	
	include_once 'dbcon.php';
	
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
	if(!isset($chk))
	{
		?>
        <script>
		alert('Πρέπει να γίνει τουλάχιστον μία επιλογή');
		window.location.href = 'index.php';
		</script>
        <?php
	}
	else
	{
		for($i=0; $i<$chkcount; $i++)
		{
			
			$del = $chk[$i];
			$sql=$MySQLiconn->query("DELETE FROM orders WHERE order_id=".$del);
		}	
		
		if($sql)
		{
			?>
			<script>
			alert('Η διαγραφή ήταν επιτυχής');
			window.location.href='index.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Σφάλμα κατά την διαγραφή των στοιχείων, ΠΡΟΣΠΑΘΗΣΕ ΞΑΝΑ');
			window.location.href='index.php';
			</script>
			<?php
		}
		
	}

	
?>