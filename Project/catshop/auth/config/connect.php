<?php
  $host = "localhost";
  $user = "u939882851_6124414011";
  $pass = "Pw6124414011";
  $dbname = 'u939882851_6124414011';
  $conn = mysqli_connect($host, $user, $pass, $dbname);

  if (!$conn) {
    echo "Cannot connect Database catshop";
  }

  mysqli_set_charset($conn, 'utf8');
?>