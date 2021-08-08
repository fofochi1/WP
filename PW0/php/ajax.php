<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: php/login.php");
}
$loggedInUser = $_SESSION['username'];

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

$gotten = $_GET['q'];

if($gotten == 'winner'){
$sql = "SELECT winner, loser, win_condition, lose_condition, match_type FROM matches WHERE winner = '{$loggedInUser}'";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));

while($row = mysqli_fetch_array($result)){
  echo "<table>";
  echo "<tr>";
  echo "<th>Game type</th>";
  echo "<th>Winner</th>";
  echo "<th>Loser</th>";
  echo "<th>Winning Condition</th>";
  echo "<th>Losing Condition</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $row["match_type"] . "</td>";
  echo "<td>" . $row["winner"] . "</td>";
  echo "<td>" . $row["loser"] . "</td>";
  echo "<td>" . $row["win_condition"] . "</td>";
  echo "<td>" . $row["lose_condition"] . "</td>";
  echo "</tr>";
  echo "</table>";
  echo "<br>";
}
}elseif($gotten == 'loser'){
  $sql = "SELECT winner, loser, win_condition, lose_condition, match_type FROM matches WHERE loser = '{$loggedInUser}'";
  $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));

  while($row = mysqli_fetch_array($result)){
    echo "<table>";
    echo "<tr>";
    echo "<th>Game type</th>";
    echo "<th>Winner</th>";
    echo "<th>Loser</th>";
    echo "<th>Winning Condition</th>";
    echo "<th>Losing Condition</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $row["match_type"] . "</td>";
    echo "<td>" . $row["winner"] . "</td>";
    echo "<td>" . $row["loser"] . "</td>";
    echo "<td>" . $row["win_condition"] . "</td>";
    echo "<td>" . $row["lose_condition"] . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>";
  }
}

 ?>
