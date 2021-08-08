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
$gameType = "";
$winner = "";
$loser = "";
$winCondition = "";
$loseCondition = "";

$gameType = $_GET['gameType'];
$winner = $_GET['winner'];
$loser = $_GET['loser'];
$winCondition = $_GET['winCondition'];
$loseCondition = $_GET['loseCondition'];

echo $gameType;
echo $winner;
echo $loser;
echo $winCondition;
echo $loseCondition;

  $post = "INSERT INTO matches (match_type, winner, loser, win_condition, lose_condition)
  VALUES ('$gameType', '$winner', '$loser', '$winCondition', '$loseCondition')";

  if ($mysqli->query($post) === True){
    echo "New record created succesfully";
  } else{
    echo "Error: " . $post . "<br>" . $mysqli->error;
  }

  $mysqli->close();



 ?>
