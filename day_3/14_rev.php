
<?php


$num=$_POST['num'];

$result=0;

while($num > 1){
$rem=$num % 10;
$result=($result * 10) + $rem;
$num=($num/10);
}
echo "Reverse Number of given number is : ".$result;

?>



