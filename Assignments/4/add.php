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


$sql2 = "CREATE TABLE IF NOT EXISTS AddressBook(
  AddressID INT PRIMARY KEY AUTO_INCREMENT,
  F_name VARCHAR(50),
  L_name VARCHAR(50) NOT NULL,
  Address_line_1 VARCHAR(50),
  Address_line_2 VARCHAR(50),
  Address_line_3 VARCHAR(50),
  State_Code VARCHAR(2) NOT NULL,
  Phone_number VARCHAR(12),
  email_id VARCHAR(50),
  alt_phone_number VARCHAR(12)
)";

if ($mysqli->query($sql2) === TRUE) {
  echo "";
} else {
  echo "Error creating table: " . $mysqli->error;
}
$mysqli->close();

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="styles.css">

   </head>
   <body>

     <div class="header">
      <h1>Add an Entry</h1>
     </div>

     <div class="add_form">
       <form class="" action="insert.php" method="post">

         <label for="firstname">First Name: </label>
         <input type="text" name="first_name" id="firstname">
         <br>
         <br>
         <label for="lastname">Last Name: </label>
         <input type="text" name="last_name" id="lastname">
         <br>
         <br>
         <label for="address_1">Address Line 1: </label>
         <input type="text" name="address1" id="address_1">
         <br>
         <br>
         <label for="address_2">Address Line 2: </label>
         <input type="text" name="address2" id="address_2">
         <br>
         <br>
         <label for="address_3">Address Line 3: </label>
         <input type="text" name="address3" id="address_3">
         <br>
         <br>
         <label for="state_code">State: </label>
         <input type="text" name="state" id="state_code">
         <br>
         <br>
         <label for="phone">Phone Number: </label>
         <input type="text" name="phone_number" id="phone">
         <br>
         <br>
         <label for="email">Email: </label>
         <input type="text" name="email_id" id="email">
         <br>
         <br>
         <label for="alt_num">Alternative Phone: </label>
         <input type="text" name="alt_phone_number" id="alt_num">
         <br>
         <br>
         <input type="submit" name="" value="Submit">
         <button type="reset" value="Reset">Clear to restart</button>

       </form>
     </div>
   </body>
 </html>
