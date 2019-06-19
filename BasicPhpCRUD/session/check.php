<?php
  error_reporting(0);

  session_start();

  $_SESSION["username"] = "Gazi Al-Amin";
  $_SESSION["class"] = "BSc. Software Engineering";


  echo $_SESSION["username"]."<br>";
  echo $_SESSION["class"];

  //session_unset();
 ?>
