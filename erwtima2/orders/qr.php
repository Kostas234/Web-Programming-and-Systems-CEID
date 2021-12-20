<?php 
include 'phpqrcode\lib\full\qrlib.php';
QRcode::png('$trackid', 'qrcode.png'); // δημιουργει το αρχειο
QRcode::png('$track_id'); // δημιουργει την εικονα-κωδικα και την βγαζει στην σελιδα του broswer
?>