<?php
session_start();
include 'dbh.inc.php';

$admin_username = $_POST['admin_username'];//η μεταβλητη παιρνει με post την τιμη που δωθηκε στην αντιστοιχη φπρμα του header
$admin_pwd = $_POST['admin_pwd'];//το ιδιο με πριν

$sql = "SELECT * FROM admin WHERE admin_username='$admin_username' AND admin_pwd='$admin_pwd' ";
$result = mysqli_query($conn, $sql);//αιτημα στη βαση με βαση τις πληροφοριες που εχουν δωθει

if (!$row = mysqli_fetch_assoc($result)) {//εαν δεν επιστρεψει εναν πινακα επιστρεφει στο index
    header("Location: index.php");
}else {
    $_SESSION['id'] = $row['admin_id'];
    header("Location: direct.php");
}

?>
