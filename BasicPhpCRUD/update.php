 <?php
 include("connection.php");
 //for avoiding error
 error_reporting(0);

  $_GET['rn'];
  $_GET['sn'];
  $_GET['cl'];
  ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="GET">
       <div style="text-align: center;">
           <h2>Update registration information for Student</h2>
           Roll NO : <input type="text" name="rollno" value="<?php echo $_GET['rn'];?>"><br><br>
           Name : <input type="text" name="stdname" value="<?php echo $_GET['sn'];?>"><br><br>
           Class : <input type="text" name="class" value="<?php echo $_GET['cl'];?>"><br><br>
           <input style="background-color: blue;color:white;" type="submit" name="submit" value="Update">
       </div>
     </form>

    <!-- Update registration information for Student -->
     <?php
      if ($_GET['submit']) {
        $rollno = $_GET['rollno'];
        $name = $_GET['stdname'];
        $class  = $_GET['class'];

        if(($rollno != "") && ($name !="") && ($class != "")) {
              //if($class != $class) {
                    $uQuery = "UPDATE student SET name= '$name', class = '$class' WHERE rollno= '$rollno' ";
                    $data = mysqli_query($conn, $uQuery);
                    if ($data) {
                      echo "<font color='green'> Data is updated Successfully.<a href='display.php'>Click here to see updated List</a>";
                    }
                    else {
                      echo "<font color='red'>Data is not updated . <a href='display.php'>Click here to see updated List</a>";
                    }
              //}
              //else {
                //echo "<font color='red'>please change some input data . <a href='display.php'>Click here to see updated List</a>";
              //}
        }
        else {
          echo "<font color='red'>Please fill some data.<a href='display.php'>Click here to see updated List</a>";
        }
      }
      else {
        echo "<font color='blue'>click the update button to save the changable information</font>";
      }
      ?>

   </body>
 </html>
