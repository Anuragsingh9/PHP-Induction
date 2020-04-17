<?php

  include 'db.php';

  if(isset($_POST['submit'])){
    
      if($_POST['name'] ==""){
      $error_msg['name']="Name is required";
   
    }

  if(is_numeric($_POST['name'])){
    $error_msg['name']="Name cannot be numeric";
}
  if($_POST['email'] =="" || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      $error_msg['email']="Email is Not Valid";
    }

    if($_POST['password']==""  || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $_POST['password'])){
$error_msg['password']="Password must be in this format-Anurag1@";
}

  if(!isset($error_msg)) {


    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
     $insert="INSERT INTO `table2` (`Name`,`Email`,`Password`) VALUES ('".$name."','".$email."','".$password."')";
    $sql=mysqli_query($conn,$insert);
    if($sql){
      echo"Data inserted successfully";
    }else
    {
      echo"Data not inserted";
    }


    }



}





?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Validation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

   <style>
    .error{
      color:red;
    }

  </style>


</head>
<body class="bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"></h5>
        <form action="" method="post" id="form-box" class="p-2">

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>

            <span>
        <?php 

    
        if(isset($error_msg['name'])) {
         echo "<div class='error'>".'*'.$error_msg['name']."</div>";
         
        }
      ?>
      </span>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
           <span>
        <?php 

    
        if(isset($error_msg['email'])) {
         echo "<div class='error'>".'*'.$error_msg['email']."</div>";
         
        }
      ?>
      </span>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Anurag1@" required>

           <span>
        <?php
          if(isset($error_msg['password'])){
          echo "<div class='error'>".'*'.$error_msg['password']."</div>";
        }

        ?>
      </span>
          </div>

          

          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>