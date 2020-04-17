<?php
  include "newdb.php";
  $select="SELECT * FROM `imgtable`";
  $sql=mysqli_query($conn,$select);
  if($sql->num_rows > 0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody><?php
     while($result=mysqli_fetch_assoc($sql)){
      ?>
      <tr>
        <td><?php echo $result['id'];?></td>
        <td><img src="image/<?php echo $result['image'];?>" style="height:60px; width:60px;"></td>
        <td><a href="imgupdate.php?imgid=<?php echo $result['id'];?>">Edit</a></td>
        <td><a href="">Delete</a></td>
        <td><a href="download.php?imgid=<?php echo $result['image'];?>">Download</a></td>
        <td><a href="image/<?php echo $result['image'];?>">Download file</a></td>
        

      </tr>
      <?php
    }?>
     
    </tbody>
  </table>
  <?php
}else
  echo"No record ";

  ?>
</div>

</body>
</html>
