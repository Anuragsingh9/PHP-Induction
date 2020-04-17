<?php
// Q5. Find the average of integer array (sum of all item / total item) and print count of items 
//     - greater than average 
//     - less than average
//     - equal to average
//     Example: [1,2,3,4,5,10] 
//     OUTPUT: 
//         Average: 4.16
//         Greater: 2
//         Less   : 4
//         Equal  : 0
	$less=0;
	$greater=0;
	$equal=0;
	$arr=array(1,2,3,4,5,10);
	$arr_sum=array_sum($arr);
	// echo($arr_sum) ;

	$count=sizeof($arr);
	$average=$arr_sum/$count;
	echo"Average ===> ".$average.'<br>';

	//loop for counting less than average

	for($i=0;$i<$count;$i++){
		if($arr[$i]<$average){
			$num=($arr[$i]);
			
			$less++;

		}
		
		
	}	
echo "Less than average ===> ".$less.'<br>';

//loop for counting greater than average

	for($i=0;$i<$count;$i++){
		if($arr[$i]>$average){
			$num=($arr[$i]);
			
			$greater++;

		}
		
		
	}	
echo "Greater than average ===> ".$greater.'<br>';


//loop for counting equal to average

	for($i=0;$i<$count;$i++){
		if($arr[$i]==$average){
			$num=($arr[$i]);
			
			$equal++;

		}
		
		
	}	
echo "equal to  average ===> ".$equal;


 ?>