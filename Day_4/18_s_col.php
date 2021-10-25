<?php  

$a = array(     
             array(1, 3, 3),  
             array(9, 5, 1),  
             array(4, 5, 1)  
           );  
   
$rows = count($a);  
$cols = count($a[0]);  

   
//Calculates sum of each column of given matrix  
for($i = 0; $i < $cols; $i++){  
    $sumCol = 0;  
    for($j = 0; $j < $rows; $j++){  
      $sumCol = $sumCol + $a[$j][$i];  
    }  
    print("Sum of " . ($i+1) . " column: " . $sumCol);  
    print("<br>");  
}  
?>  