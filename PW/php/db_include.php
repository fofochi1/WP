<?php
  function doDB(){
    global $mysqli;
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_errno())
      exit();
    }
  }
 ?>
