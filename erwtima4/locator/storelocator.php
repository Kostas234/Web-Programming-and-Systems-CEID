<?php
require("db-conn2.php");

// παιρνεις τις παραμετρους απο το URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];
// ξεκινα το XML και δημιουργειται το parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
// συνδεση με mySQL 
$conn=mysqli_connect ("localhost", "root", "", "project2017");
mysqli_query($conn, 'SET CHARACTER SET utf8');
mysqli_query($conn, 'SET COLLATION_CONNECTION=utf8_general_ci');
if (!$conn) {
  die("Not connected : " . mysqli_error());
}
// καθοριζεται η ενεργη βαση
$db_selected = mysqli_select_db($conn, "project2017");
if (!$db_selected) {
  die ("Can\'t use db : " . mysqli_error());
}
// ψαχνει τις σειρες της βασης
$query = sprintf("SELECT name, address, city, TK, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM markers2 HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
  mysqli_real_escape_string($conn,$center_lat),
  mysqli_real_escape_string($conn,$center_lng),
  mysqli_real_escape_string($conn,$center_lat),
  mysqli_real_escape_string($conn,$radius));
$result = mysqli_query($conn, $query);
//$result = mysqli_query($query);
if (!$result) {
  die("Invalid query: " . mysqli_error());
}
header("Content-type: text/xml");
// επαναληψη while στις γραμμες της βασης, προσθετωντας XML nodes για καθε μια
while ($row = @mysqli_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", $row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("city", $row['city']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("distance", $row['distance']);
}

echo $dom->saveXML();

?>