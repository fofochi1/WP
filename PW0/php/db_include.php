<?php
  function doDB(){
    global $mysqli;
    $servername = "localhost";
    $username = "abuzetaborquez1";
    $password = "abuzetaborquez1";
    $dbname = "abuzetaborquez1";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_errno())
      exit();
    }
  }
 ?>
