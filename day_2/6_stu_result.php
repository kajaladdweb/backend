<?php
$php=60;
$java=40;
$wordpress=85;
$android=75;
$react=79;

$total=$php + $java + $wordpress + $android + $react;

$per=$total/5;
echo "java:".$java;
echo "<br>";

echo "php:".$php;
echo "<br>";

echo "wordpress:".$wordpress;
echo "<br>";

echo "android:".$android;
echo "<br>";

echo "react:".$react;
echo "<br>";

echo "total:".$total;
echo "<br>";
echo "Percentage of total marks is :".$per;
?>