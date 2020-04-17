<?php
  include "newdb.php";
  $id=$_GET['imgid'];
  // $update="SELECT * FROM `imgtable` WHERE `id`=$id";
  // $sql=mysqli_query($conn,$update);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="img">Image:</label>
      <input type="file" class="form-control" id="img" placeholder="Enter password" name="img">
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

  <?php

  if(isset($_POST['submit'])){

    $image=$_FILES['img'] ['name'];
    $image_temp=$_FILES['img']['tmp_name'];
    

    move_uploaded_file($image_temp,"image/".$image);

    $update="UPDATE  `imgtable` SET `image`='".$image."' WHERE `id`=$id";

    $run=mysqli_query($conn,$update);
    if($run){
    echo"img uploaded";
  }else{
  echo"img not uploaded";
}


}







  ?>









</body>
</html>
