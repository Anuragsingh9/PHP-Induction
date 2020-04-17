<?php
	
	$string=12;
	$count=strlen($string);
	//echo$count;
	// $a="32";
	$check=is_int($string);
	if($check){
		echo"It is a int"."<br>";

			if($string%2 == 0){
				echo"Its a Even Number";
			}else{
				echo"Its a Odd Number";
			}
	}else{
		echo"Its a String"."<br>";
		for($i=($count-1); $i>=0;$i--){
			echo$string[$i];
		}
	}


  ?>