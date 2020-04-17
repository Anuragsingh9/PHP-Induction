<?php
  session_start();
  include "db.php";
  if(!isset($_SESSION['name'])|| !isset($_SESSION['password'])){

    if(isset($_POST['name']) || isset($_POST['pwd'])){
  

  $name=$_POST['name'];
  $password=$_POST['pwd'];
  $_SESSION['name']=$name;
  $_SESSION['password']=$password;


  $select="SELECT * FROM `table2` WHERE `Name`='$name' AND `Password`='$password'";
  $sql=mysqli_query($conn,$select);
  $row=mysqli_num_rows($sql);
  if($row <1){?>
    <script>
      alert('not matched');
    </script>
    <?php
  
  }else{
    header('location:show.php');



  }  
  }
  }else{
    header('location:show.php');
  }
    
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
  <style></style>
</head>
<body>
<h1>WELCOME TO LOGIN PAGE</h1>
<div class="col-sm-4">
  
  <form action=""  method="POST" >

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>
</body>
</html>