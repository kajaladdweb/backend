<?php


function counter($arr){
$zero = 0;
$pos = 0;
$neg = 0;

for($i = 0;$i <count($arr);$i++){

if($arr[$i]===0){
$zero++;
}
else if($arr[$i]> 0){
$pos++;
}
elseif($arr[$i] < 0){
$neg++;
}


}
echo "Positive count : ".$pos."<br>";
echo "Zero count : " .$zero."<br>";
echo "Negative count : ".$neg."<br>";

}

$array = array(0,1,2,3,0,0,-3,-5,9,2,1);

echo"Array Element : <br> ";
for ($i = 0; $i < count($array); $i++) {
print($array[$i] . " "."<br>");
}
counter($array);
?>
