<?php
	
	$conn=mysqli_connect("localhost","root","","imgcrud");
	if($conn){
		echo"Connected to db";
	}else
	{
		echo"not connected";
	}

?>