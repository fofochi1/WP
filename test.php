<?php
  $host = "localhost";
  $user = "abuzetaborquez1";
  $pass = "abuzetaborquez1";
  $db = "abuzetaborquez1";

  $r = mysqli_connect($host, $user, $pass, $db);
    if(!$r){
      echo "Could not connect to server\n";
      trigger_error(mysqli_error(), E_USER_ERROR);
    }
    else{
      echo "<h1> Alfonso Buzeta Borquez - Codd DB Connection via PHP test</h><br>";
      echo "Connection established\n";
    }
  mysqli_close();
 ?>
