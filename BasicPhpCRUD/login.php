<?php
include("connection.php");
error_reporting(0);
session_start();
 ?>

 <form class="" action="" method="post">
   <fieldset style="width: 25%; background-color: #3CB371; color: white;">
     <legend style="background-color: blue;">Login Form</legend>
       Username: <input type="text" name="username" value="" placeholder="Enter Your user Name"><br><br>
       Password: <input type="text" name="password" value="" placeholder="Enter your Password"><br><br>
       <b><input type="submit" name="submit" value="Login" text-align="center" style="align:center; color:green;"></b><br><br>
       <a href="insert.php" style="background-color:white;color: green;text-decoration: none;"><b>Registration</b></a>
   </fieldset>
 </form>

<?php
    if (isset($_POST['submit'])) {
      $user = $_POST['username'];
      $pwd = $_POST['password'];
      //check database
      $Query = "SELECT * FROM student WHERE username = '$user' && password = '$pwd' ";
      $data = mysqli_query($conn, $Query);
      $total = mysqli_num_rows($data);

      if ($total == 1) {
        //echo "Login OK";
        $_SESSION["user_name"] = $user;
        header('location:home.php');
      }
      else {
        echo "Your login is failed";
      }

    }
?>
