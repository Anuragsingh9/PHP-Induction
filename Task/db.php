<?php
	$conn=mysqli_connect("localhost","root","","logcheck");
	if($conn){
		echo"connection done";
	}else{
		echo"NOt connected";	
	}

?>