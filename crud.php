<?php
	
	include "db.php";
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

<div class="col-sm-4">
  
  <form action=""  method="POST" >

  	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <div class="form-group">
      <label for="city">City:</label>
      <select name="city">
      	<option value="Jaipur">Jaipur</option>
      	<option value="Delhi">Delhi</option>
      	<option value="Punjab">Punjab</option>


      </select>
    </div>

    <label>Gender</label><br>
    <input type="radio" name="gender" value="Male">
    <label>Male</label>

    <input type="radio" name="gender" value="Female">
    <label>Female</label>

    <input type="radio" name="gender" value="Other">
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

<?php

	



	if(isset($_POST['submit'])){

		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pwd'];
		$city=$_POST['city'];
		$gender=$_POST['gender'];
		// $image=$_FILE['img'];
		//print_r($_POST);
		$insert="INSERT INTO `table2` (`Name`,`Email`,`Password`,`City`,`Gender`) VALUES ('".$name."','".$email."','".$pass."','".$city."','".$gender."')";
		$sql=mysqli_query($conn,$insert);
		if($sql){
			echo"Data inserted successfully";
		}else
		{
			echo"Data not inserted";
		}
	}		

	
?>

</body>
</html>










