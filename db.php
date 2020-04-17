<?php
	
	$conn=mysqli_connect("localhost","root","","crud");
	if($conn){
		echo"Connected to db";
	}else
	{
		echo"not connected";
	}

?>