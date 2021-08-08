<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT F_name, L_name, Phone_number FROM AddressBook";
$result = $mysqli->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $first = $row['F_name'];
    $last = $row['L_name'];
    $phone = $row['Phone_number'];
    $url = 'details.php?f=' . $first . '&l=' . $last . '&p=' . $phone;
    echo "<br><a href=" . $url . ">" . $first . " " . $last . "</a><br>";
  }
}

  $mysqli->close();



 ?>
