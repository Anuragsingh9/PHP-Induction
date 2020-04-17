<?php
  include 'db.php';

  if(isset($_POST['submit'])){

  if(empty($_POST['name'])){
    $insert="INSERT INTO `log` (`name`,`attempt_type`) VALUES ('','0')";
  $sql=mysqli_query($conn,$insert);
  
}else{
  $name=$_POST['name'];
  $insert="INSERT INTO `log` (`name`,`attempt_type`) VALUES ('".$name."','1')";
  $sql=mysqli_query($conn,$insert);
  if($sql){
  echo"inserted";
}
}
}
  






?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" >
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Login</button>
  </form>
</div>

</body>
</html>
