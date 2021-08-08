<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Who Will Win!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    <?php
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
    <div class="container">
      <div class="row">
        <div class="col">
           <h3>Roll Dice</h3>
           <a href="rollDice.html">
             <img src="images/animated-dice-image-0104.gif" alt="">
           </a>
           <p>Roll One Six Sided Die</p>
        </div>
        <div class="col">
          <h3>Rock Paper Scissor</h3>
          <a href="rockPaperScissor.html">
            <img src="images/rock-paper-scissor.gif" alt="">
          </a>
          <p>Play Rock Paper Scissors between two players</p>
         </div>
        <div class="col">
           <h3>Dice Game</h3>
           <a href="diceGame.html">
             <img src="images/two-dice.gif" alt="">
           </a>
           <p>Roll Two Dice to see who wins</p>
         </div>
      </div>
    </div>
  </body>

<script>
  $(document).ready(function(){
    $.ajax({
      url : 'php/matchesTable.php',
      type : 'POST',
      success : function(result){
        console.log(result);
      },
      error : function(){
        console.log('error');
      }
    });
  });

</script>

</html>
