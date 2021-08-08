<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dice Game</title>

    <link rel="stylesheet" href="Styles/styles.css">
  </head>
  <body>
    <?php
      session_start();
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: php/login.php");
      }
    ?>
    <?php include('header.php'); ?>
    <br>
    <?php
    $loggedInUser = $_SESSION['username'];
    echo "<h1 id='username'>{$loggedInUser}</h1>";
    ?>
    <div class="header">
      <h1>Who Will Win</h1>
      <button type="button" name="button" class="" onclick="diceGame()">Roll</button>
    </div>
    <h3></h3>
    <div class="columns">
        <div class="left-div left-text">
          <h4>Player 1</h4>
          <img src="images/dice6.png" id="player1">
        </div>
        <div class="right-div right-text">
          <h4>Player 2</h4>
          <img src="images/dice6.png" id="player2">
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/diceGame.js" charset="utf-8"></script>
  </body>
</html>
