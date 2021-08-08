<?php
$servername = "localhost";
$username = "abuzetaborquez1";
$password = "abuzetaborquez1";
$dbname = "abuzetaborquez1";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$first = $_REQUEST['first_name'];
$last = $_REQUEST['last_name'];


$post = "DELETE FROM AddressBook WHERE (F_name = '$first' && L_name = '$last')";

if ($mysqli->query($post) === True){
  echo "Record deleted succesfully";
} else{
  echo "Error: " . $post . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
