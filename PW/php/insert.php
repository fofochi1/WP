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
$gameType = "";
$winner = "";
$loser = "";
$winCondition = "";
$loseCondition = "";

//  if(isset($_POST)){
if (isset($_POST['gameType'])){
  $gameType = $_POST['gameType'];
}
if (isset($_POST['winner'])){
  $winner = $_POST['winner'];
}
if (isset($_POST['loser'])){
  $loser = $_POST['loser'];
}
if (isset($_POST['winCondition'])){
  $winCondition = $_POST['winCondition'];
}
if (isset($_POST['loseCondition'])){
  $loseCondition = $_POST['loseCondition'];
}
//  $gameType=$_POST['gameType'];
//  $winner=$_POST['winner'];
//  $loser=$_POST['loser'];
//  $winCondition=$_POST['winCondition'];
//  $loseCondition=$_POST['loseCondition'];
//  }

//    $query = "INSERT INTO matches(match_type, winner, loser, winCondition, loseCondition) VALUES (?,?,?,?,?)";
//    $stmt = $mysqli->prepare($query);
//    $stmt->bind_param(sssss, $gameType, $winner, $loser, $winCondition, $loseCondition);
//    $stmt->execute();

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
