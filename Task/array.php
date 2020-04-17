<?php 
 
	
	echo"The given Array is- 1,2,3,4,5".'<br>';
	echo"After rotating two times-"." ";
function leftRotate($arr, $n, $k) 
{ 
    
    $mod = $k % $n; 
  
     
    for ($i = 0; $i < $n; $i++) 
        echo  ($arr[($mod +  
                    $i) % $n]) , " "; 
} 
  // 1,2,3,4,5

$arr = array(1, 2, 3, 4, 5); 
$n = sizeof($arr); 
  
$k = 2; 
leftRotate($arr, $n, $k); 
  

?> 