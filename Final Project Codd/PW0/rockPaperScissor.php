<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dice Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
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
      <h1>Rock Paper Scissor</h1>
      <h2 id="username" value="<?php echo htmlspecialchars($loggedInUser);?>"></h2>
      <button type="button" name="button" class="btn btn-primary" onclick="rockPaperScissor()">Shoo</button>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h4>Player 1</h4>
          <img src="images/rock.png" id="player1">
        </div>
        <div class="col-6">
          <h4>Player 2</h4>
          <img src="images/rock.png" id="player2">
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/rockPaperScissor.js" charset="utf-8"></script>
  </body>
</html>
