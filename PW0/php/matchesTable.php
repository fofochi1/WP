<?php
$servername = "localhost";
$username = "abuzetaborquez1";
$password = "abuzetaborquez1";
$dbname = "abuzetaborquez1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql2 = "CREATE TABLE IF NOT EXISTS users(
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql2) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table 2: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS matches (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
match_type VARCHAR(30) NOT NULL,
winner VARCHAR(30) NOT NULL,
loser VARCHAR(30) NOT NULL,
win_condition VARCHAR(30) NOT NULL,
lose_condition VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table matches created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
