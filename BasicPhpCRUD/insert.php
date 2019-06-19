<?php
include("connection.php");
//for avoiding error
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div style="text-align: center;">
    <form class="" action="" method="post" enctype="multipart/form-data">
      <fieldset style="width: 25%; background-color: #3CB371; color: white;">
        <legend style="background-color: blue;">Registration Page for Student</legend>
              Roll NO : <input type="text" name="rollno" value="" required><br><br>
              Name : <input type="text" name="stdname" value="" required><br><br>
              Class : <input type="text" name="class" value="" required><br><br>
              Upload Image : <input type="file" name="uploadfile" value=""><br><br>
              Username: <input type="text" name="username" value="" placeholder="Enter Your user Name"><br><br>
              Password: <input type="text" name="password" value="" placeholder="Enter your Password"><br><br>
              <input style="background-color: blue;color:white;" type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
    </div>

    <!--how to insert data through form -->
    <?php



        //Insert data into database through codding into DATABASE
        if ($_POST['submit']) {
          $rn = $_POST['rollno'];
          $sn = $_POST['stdname'];
          $cl = $_POST['class'];
          $filename = $_FILES["uploadfile"]["name"];
          $tempname = $_FILES["uploadfile"]["tmp_name"];
          $folder = "student/" . $filename;
          move_uploaded_file($tempname,$folder);
          $username = $_POST['username'];
          $password = $_POST['password'];

          if($rn != "" && $sn !="" && $cl != "" && $filename != "" && $username != "" && $password!= ""){
                $query = "INSERT INTO student VALUES('$rn','$folder','$sn', '$cl' , '$username' , '$password') ";
                //For run queries
                $data = mysqli_query($conn, $query);
                //if data is successfully inserted
                if($data){
                  echo "<font color='green'>Data Successfully inserted into Database . <a href='display.php'>Click here to see updated List</a>";
                }
                else {
                  echo "<font color='red'>Please Input Data Properly . <a href='display.php'>Click here to see updated List</a>";
                }
          }
          else {
            echo "All filleds are required";
          }
        }
     ?>
  </body>
</html>
