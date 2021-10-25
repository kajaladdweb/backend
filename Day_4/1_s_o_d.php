
<?php
$ans=0;
$arr=array(2,5,6,1,7);
for($i=0;$i<5;$i++)
{
    $ans=$ans+$arr[$i];
}
print_r($arr);
echo "<br>";
echo "Sum Of all elements is : ".$ans;
?>