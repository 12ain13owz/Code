<?php
  $host = "localhost";
  $user = "root";
  $pass = "12345678";
  $dbname = 'catshop';
  $conn = mysqli_connect($host, $user, $pass, $dbname);

  if (!$conn) {
    echo "Cannot connect Database catshop";
  }

  mysqli_set_charset($conn, 'utf8');
?>