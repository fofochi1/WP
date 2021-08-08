<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Roll a Dice</title>
    <link rel="stylesheet" href="Styles/styles.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="header">
      <h1>Roll a Dice</h1>
      <button type="button" name="button" class="" onclick="rollDice()">Roll</button>
    </div>
    <div class="rollDice">
      <img src="images/dice3.png" id="rollDice">
    </div>
    <script src="js/rollDice.js" charset="utf-8"></script>
  </body>
</html>
