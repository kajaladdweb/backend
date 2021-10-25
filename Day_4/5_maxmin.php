
<?php 
function getMax($arr)  
{ 
   $n = count($arr);  
   $max = $arr[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $arr[$i]) 
           $max = $arr[$i]; 
    return $max;        
} 
  
function getMin($arr)  
{ 
   $n = count($arr);  
   $min = $arr[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $arr[$i]) 
           $min = $arr[$i]; 
    return $min;        
} 
  
$arr = array(100, 22, 3, 420, 52); 
print_r($arr);
echo "<br>";
echo"Max Array : ".(getMax($arr)); 

echo"<br>Min Array : ".(getMin($arr)); 
?>