<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Who Will Win!</title>
    <link rel="stylesheet" href="Styles/styles.css">

  </head>
  <body>
    <?php
      include "PHP/matchesTable.php";

            session_start();
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
              header("location: php/login.php");
            }
    ?>
    <?php include('header.php'); ?>
    <?php
      $loggedInUser = $_SESSION['username'];
      echo "<h1> Welcome, {$loggedInUser}</h1>";
    ?>
    <h1 class="h1-front-page">Settle Your Arguments</h1>
    <h2 id="username" value="<?php echo htmlspecialchars($loggedInUser);?>"></h2>
    <div class="homePage">
      <div id='boxes'>
        <div id='leftbox'>
           <h3>Roll Dice</h3>
           <a href="rollDice.php">
             <img src="images/animated-dice-image-0104.gif" alt="">
           </a>
           <p>Roll One Six Sided Die</p>
        </div>
        <div id='middlebox'>
          <h3>Rock Paper Scissor</h3>
          <a href="rockPaperScissor.php">
            <img src="images/rock-paper-scissor.gif" alt="">
          </a>
          <p>Play Rock Paper Scissors between two players</p>
         </div>
        <div id='rightbox'>
           <h3>Dice Game</h3>
           <a href="diceGame.php">
             <img src="images/two-dice.gif" alt="">
           </a>
           <p>Roll Two Dice to see who wins</p>
         </div>
      </div>
    </div>
  </body>
</html>
