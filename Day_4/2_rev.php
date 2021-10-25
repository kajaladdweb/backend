
<?php
$arr=array(2,5,6,1,7);
$len=count($arr);
echo "orginal array:";
print_r($arr);
echo "<br>";
for($i=$len-1;$i>=0;$i--)
{

echo "Reverse order:".$arr[$i]."<br>";
}
?>


