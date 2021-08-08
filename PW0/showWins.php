<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Styles/styles.css">
    <style>

      body{
        text-align: center;
      }
      table, th, td{
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border-collapse: collapse;
      }
      th, td{
        padding: 5px;
        width: 25%;
      }
    </style>

  </head>
  <body>
    <?php
      session_start();
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: php/login.php");
      }
      $loggedInUser = $_SESSION['username'];
    ?>
    <?php include('header.php'); ?>
    <h1>Request your results!!!!</h1>
    <h2 id="username" value="<?php echo htmlspecialchars($loggedInUser);?>"></h2>
    <?php
      echo "<h1 id='username'>{$loggedInUser}</h1>";
    ?>
    <form action="">
      <select name="names" onchange="showWins(this.value)">
        <option value="">Select</option>
        <option value="winner">Wins</option>
        <option value="loser">Losses</option>

      </select>
    </form>
    <br>
    <div id="txtHint">
      Results will be posted here
    </div>

    <script src="js/showWins.js" charset="utf-8"></script>
  </body>
</html>
