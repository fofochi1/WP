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

$first = $_REQUEST['first_name'];
$last = $_REQUEST['last_name'];
$add1 = $_REQUEST['address1'];
$add2 = $_REQUEST['address2'];
$add3 = $_REQUEST['address3'];
$state = $_REQUEST['state'];
$phone = $_REQUEST['phone_number'];
$email = $_REQUEST['email_id'];
$alt_phone = $_REQUEST['alt_phone_number'];

  $post = "UPDATE AddressBook SET Address_line_1 = '$add1', Address_line_2 = '$add2', Address_line_3 = '$add3', State_Code = '$state', Phone_number = '$phone', email_id = '$email', alt_phone_number = '$alt_phone' WHERE F_name = '$first' && L_name = '$last'";

  if ($mysqli->query($post) === True){
    echo "Record updated succesfully";
  } else{
    echo "Error: " . $post . "<br>" . $mysqli->error;
  }

  $mysqli->close();
 ?>
