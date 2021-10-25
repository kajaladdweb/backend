
<?php

function count_even_odd( $arr, $arr_size)
{
$even = 0;
$odd = 0; 

for( $i = 0 ; $i < $arr_size ; $i++)
{
if ($arr[$i] & 1 == 1)
$odd ++ ;
else
$even++ ;
}

echo "Number of Even Elements = " ,
$even," <br>Number of odd " ,
"elements = " ,$odd;
}

$arr = array(2, 3, 4, 5, 6);
$n = count($arr);

echo "original array:";
echo "<br>";
print_r($arr);
count_even_odd($arr, $n);

?>


