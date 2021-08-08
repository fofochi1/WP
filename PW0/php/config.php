<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'abuzetaborquez1');
  define('DB_PASSWORD', 'abuzetaborquez1');
  define('DB_NAME', 'abuzetaborquez1');

  $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if($link === false){
    die('ERROR: Could not connect. ' . mysqli_connect_error());
  }
 ?>
