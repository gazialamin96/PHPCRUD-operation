<?php
    include("connection.php");
    //for avoiding error
    error_reporting(0);

    $rollno = $_GET['rn'];
    $dquery = "DELETE FROM student WHERE rollno ='$rollno' ";
    $data = mysqli_query($conn, $dquery);
    if ($data) {
      echo "<script>alert('Record Deleted!')</script>";
      ?>
      <meta http-equiv="refresh"content="0; URL = http://localhost/basicPhpCRUD/display.php">
      <?php
    }else {
      echo "<font color='red'> Sorry! Deleted process are faild";
    }
 ?>
