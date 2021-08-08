<?php
  $firstName = '';
  $lastName = '';
  $phone = '';

  if(isset($_GET['f'])){
    $firstName = $_GET['f'];
    $lastName = $_GET['l'];
    $phone = $_GET['p'];
  }elseif($firstName === ''){
    $firstName = $_REQUEST['first_name'];
    $lastName = $_REQUEST['last_name'];
    $phone = $_REQUEST['phone_number'];
  }

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

  $sql = "SELECT * FROM AddressBook WHERE (F_name = '$firstName' AND L_name = '$lastName' AND Phone_number = '$phone')";
  $result = mysqli_query($mysqli, $sql);


  while($row = mysqli_fetch_array($result)){
    echo "<h1>" . $row['F_name'] . " " . $row['L_name']  . "</h1>";
    echo "<h3>Adress: " . $row['Address_line_1'] . "<br>" . $row['Address_line_2']  . "<br>" . $row['Address_line_3'] . "</h3>";
    echo "<h3>State: " . $row['State_Code'] . "</h3>";
    echo "<h3>Phone Number: " . $row['Phone_number'] . "</h3>";
    echo "<h3>Email: " . $row['email_id'] . "</h3>";
    echo "<h3>Alternative Phone Number: " . $row['alt_phone_number'] . "</h3>";
  }

 ?>
