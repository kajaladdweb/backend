<?php

$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$precision = 4;
$total = ($sub1 + $sub2 + $sub3); 
$avg = number_format($total/3, $precision);
echo " Total = ".$total ."";
echo " <br>Average  = ".$avg ."";

if($total<35)
{
echo "<br>Fail";
}
else
if($avg>=60 && $avg<70)
{
echo "<br>Third Class";
}
else
if($avg>=70 && $avg<80)
{
echo "<br>Second Class";
}
else
if($avg>=80 && $avg<95)
{
echo "<br>First Class";
}
else
{
echo "<br>Distinction";
}
return 0;

?>