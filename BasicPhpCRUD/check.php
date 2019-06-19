<?php
  error_reporting(0);

  session_start();

  $_SESSION["username"] = "Gazi Al-Amin";

  echo $_SESSION["username"];

  //session_unset();
 ?>
