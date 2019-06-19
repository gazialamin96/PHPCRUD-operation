<?php
  include("connection.php");
  $query = "INSERT INTO student VALUES('4','Rokon', 'Computer Science ') ";
  //For run queries
  $data = mysqli_query($conn, $query);
  //if data is successfully inserted
  if($data){
    echo "Data Successfully inserted ";
  }

 ?>
