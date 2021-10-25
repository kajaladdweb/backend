<?php  

$a = array(     
             array(5, 2, 8),  
             array(4, 7, 6),  
             array(4, 9, 0)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  
  
for($i = 0; $i < $rows; $i++){  
    $sum = 0;  
    for($j = 0; $j < $cols; $j++){  
      $sum = $sum + $a[$i][$j];  
    }  
    print("Sum of " . ($i+1) ." row: " . $sum);  
    print("<br>");  

}  
?>  