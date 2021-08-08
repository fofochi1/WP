<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Roll a Dice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="header">
      <h1>Roll a Dice</h1>
      <button type="button" name="button" class="btn btn-primary" onclick="rollDice()">Roll</button>
    </div>
    <div class="rollDice">
      <img src="images/dice3.png" id="rollDice">
    </div>
    <script src="js/rollDice.js" charset="utf-8"></script>
  </body>
</html>
