<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gaziwebphp";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if ($conn) {
  //  echo "Connection is ready to use";
  }else {
    die("Connection Faild Because " .mysqli_connect_error());
  }

 ?>
