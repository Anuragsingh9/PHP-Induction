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
      if($_POST['pwd'] =="" || !is_numeric($_POST['pwd'])){
      $error_msg['password']="Password must be numeric";
}
  if(!isset($error_msg)) {


    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];




  $insert="INSERT INTO `table2` (`Name`,`Email`,`Password`,`City`,`Gender`) VALUES ('".$name."','".$email."','".$password."','".$city."','".$gender."')";
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .error{
      color:red;
    }

  </style>
</head>
<body>
  <p class="error">(*) Required Feild</p>
<div class="col-sm-4">
  
  <form action=""  method="POST" >

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  >
      <span>
        <?php 

    
        if(isset($error_msg['name'])) {
         echo "<div class='error'>".'*'.$error_msg['name']."</div>";
         
        }
      ?>
      </span>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email ex-abc@gds.com" name="email">

      <span>
        <?php 

    
        if(isset($error_msg['email'])) {
         echo "<div class='error'>".'*'.$error_msg['email']."</div>";
         
        }
      ?>
      </span>

    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      <span>
        <?php
          if(isset($error_msg['password'])){
          echo "<div class='error'>".'*'.$error_msg['password']."</div>";
        }
        ?>
      </span>
    </div>

    <div class="form-group">
      <label for="city">City:</label>
      <select name="city" required>
        <option value="">None</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Delhi">Delhi</option>
        <option value="Punjab">Punjab</option>
      </select>
    </div>

    <label>Gender</label><br>
    <input type="radio" name="gender" value="Male" required>
    <label>Male</label>

    <input type="radio" name="gender" value="Female" required>
    <label>Female</label>

    <input type="radio" name="gender" value="Other" required>
    <label>Other</label>

    <!-- <div class="form-group">
      <label for="Image">Image:</label>
      <input type="file" class="form-control" id="img" placeholder="Choose Image" name="img" multiple>
    </div> -->

    <!-- <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>



























</body>
</html>
