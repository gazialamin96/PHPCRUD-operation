<style media="screen">
  td{
    padding:10px;
  }
</style>
<?php
  include("connection.php");
  error_reporting(0);
 ?>

<?php
  $squery = "SELECT * FROM student"; //squery is for select data
  $d_data = mysqli_query($conn, $squery); //d_data is for display data
  //for displays number of rows
  $total = mysqli_num_rows($d_data);

  //how to display record from DATABASE
  if ($total != 0) {
    //echo "Table has record";
    ?>
      <table border="1px;" style="text-align:center; border-collapse: collapse;">
        <tr>
          <th>Roll Number</th>
          <th>Image</th>
          <th>Name</th>
          <th>Class</th>
          <th colspan="2">Operations</th>
        </tr>
    <?php
    while ($result = mysqli_fetch_assoc($d_data)) {
      echo "
      <tr>
        <td>".$result['rollno']."</td>
        <td><a href='$result[picsource]'><img src='".$result['picsource']."' height='100px' width='100px'/></a></td>
        <td>".$result['name']."</td>
        <td>".$result['class']."</td>
        <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>EDIT</a></td>
        <td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>DELETE</a></td>
      </tr>
      ";
    }
  }
  else {
    echo "No record Has been found";
  }
 ?>
 </table>

<a href='insert.php' style="color:green;">Click here to INSERT AGAIN </a>;

 <script type="text/javascript">
    function checkdelete(){
      return confirm('! Are you sure to delete this data??');
    }
 </script>
