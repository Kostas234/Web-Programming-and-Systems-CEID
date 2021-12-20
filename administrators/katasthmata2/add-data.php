<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{		
		$kn = $_POST["kname$i"];
		$ks = $_POST["kstreet$i"];
		$knm = $_POST["knumber$i"];
		$kc = $_POST["kcity$i"];
		$ktk = $_POST["kTK$i"];
		$kt = $_POST["ktel$i"];
		$kh = $_POST["khub$i"];
		$klt = $_POST["klat$i"];
		$kln = $_POST["klng$i"];
		$keno=NULL;
		$sql="INSERT INTO katasthmata(name,street,number,city,TK,tel,hub,lat,lng) VALUES('".$kn."','".$ks."','".$knm."','".$kc."','".$ktk."','".$kt."','".$kh."','".$klt."','".$kln."')";
	    $sql = $MySQLiconn->query($sql);
		$sql="INSERT INTO markers4(name,address,city,TK,lat,lng) VALUES('".$kn."','".$ks.$keno.$knm.",".$kc.",ΤΚ:".$ktk.",τηλ:".$kt."','".$kc."','".$ktk."','".$klt."','".$kln."')";
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
<title>Προσθήκη Καταστήματος</title>
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
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="kname<?php echo $i; ?>" placeholder="όνομα" class='form-control' /></td>
        <td><input type="text" name="kstreet<?php echo $i; ?>" placeholder="οδός" class='form-control' /></td>
		<td><input type="text" name="knumber<?php echo $i; ?>" placeholder="αριθμός" class='form-control' /></td>
        <td><input type="text" name="kcity<?php echo $i; ?>" placeholder="πόλη" class='form-control' /></td>
        <td><input type="text" name="kTK<?php echo $i; ?>" placeholder="ΤΚ" class='form-control' /></td>
        <td><input type="text" name="ktel<?php echo $i; ?>" placeholder="τηλέφωνο" class='form-control' /></td>
        <td><input type="text" name="khub<?php echo $i; ?>" placeholder="transit hub" class='form-control' /></td>
        <td><input type="text" name="klat<?php echo $i; ?>" placeholder="latitude" class='form-control' /></td>
        <td><input type="text" name="klng<?php echo $i; ?>" placeholder="longtitude" class='form-control' /></td>
       
    <tr>
    <td colspan="10">    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Εισαγωγή του Καταστήματος</button> 
    <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
    
</div>
</body>
</html>