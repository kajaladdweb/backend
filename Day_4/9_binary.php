<?php

function binarySearch($arr, $x)
{
if (count($arr) === 0) return false;
$low = 0;
$high = count($arr) - 1;

while ($low <= $high) {

$mid = floor(($low + $high) / 2);

if($arr[$mid] == $x) {
return true;
}

if ($x < $arr[$mid]) {
$high = $mid -1;
}
else {
$low = $mid + 1;
}
}


return false;
}

$arr = array(1, 2, 3, 4, 5);
$value = 5;
print_r($arr);
echo "<br>";
echo "value to find:".$value;
echo "<br>";

if(binarySearch($arr, $value) == true) {
echo $value." Exists";
}
else {
echo $value." Doesnt Exist";
}
?>