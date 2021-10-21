
<?php
$MyNum=$_POST["num"];
$rev = 0;
$Num = $MyNum;

while($Num > 0) {
$digit = $Num % 10;
$rev = $rev* 10 + $digit;
$Num = (int)($Num / 10);
}

if ($MyNum == $rev){
echo $MyNum." is a Palindrome number.\n";
} else {
echo $MyNum." is not a Palindrome number.\n";
}

?>
