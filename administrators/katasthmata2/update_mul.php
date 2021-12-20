<?php
include_once 'dbcon.php';
$kata_id = $_POST['kata_id'];
$kn = $_POST['kn'];
$ks = $_POST['ks'];
$knm = $_POST['knm'];
$kc = $_POST['kc'];
$ktk = $_POST['ktk'];
$kt = $_POST['kt'];
$kh = $_POST['kh'];
$klt = $_POST['klt'];
$kln = $_POST['kln'];
$chk = $_POST['chk'];
$chkcount = count($kata_id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE katasthmata SET name='$kn[$i]', street='$ks[$i]', number='$knm[$i]', city='$kc[$i]', TK='$ktk[$i]', tel='$kt[$i]', hub='$kh[$i]', lat='$klt[$i]', lng='$kln[$i]' WHERE kata_id=".$kata_id[$i]);
}
header("Location: index.php");
?>