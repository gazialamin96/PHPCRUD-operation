<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Uplaoding</title>
  </head>
  <body>
    <form class="" action="" method="post" enctype="multipart/form-data">
       <h1 style="color:green;">Image Uploading Page</h1>
      <input type="file" name="uploadfile" value="">
      <input type="submit" name="" value="File Upload">
    </form>

  </body>
</html>

<?php
  //echo $_FILES["uploadfile"];
  //print_r($_FILES["uploadfile"]);
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "student/" . $filename;
  //echo $folder ;
  move_uploaded_file($tempname,$folder);
  echo "<img src='$folder' alt='Student Picture' width='100px'height='100px'>";
 ?>
