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
$add1 = $_REQUEST['address1'];
$add2 = $_REQUEST['address2'];
$add3 = $_REQUEST['address3'];
$state = $_REQUEST['state'];
$phone = $_REQUEST['phone_number'];
$email = $_REQUEST['email_id'];
$alt_phone = $_REQUEST['alt_phone_number'];

  $post = "INSERT INTO AddressBook (F_name, L_name, Address_line_1, Address_line_2, Address_line_3, State_Code, Phone_number, email_id, alt_phone_number)
  VALUES ('$first', '$last', '$add1', '$add2', '$add3', '$state', '$phone', '$email', '$alt_phone')";

  if ($mysqli->query($post) === True){
    echo "New record created succesfully";
  } else{
    echo "Error: " . $post . "<br>" . $mysqli->error;
  }

  $mysqli->close();



 ?>
