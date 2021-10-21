<?php
$val= $_POST["val"];  
$fact = 1;  
for ($x=$val; $x>=1; $x--)   
{  
  $fact= $fact * $x;  
}  
echo "Factorial of $val is $fact"; 
?>