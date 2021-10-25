<?php
function swap($a,$b,$tmp)
{
    echo "First array before Swap : ";
    print_r($a);
    echo "<br">
    echo "<br>Second array before Swap : ";
    print_r($b);
    echo "<br>"
    $tmp=$a;
    $a=$b;
    $b=$tmp;
    echo "<br><br>First array after Swap : ";
    print_r($a);
    echo "<br>"
    echo "<br>Second array after Swap : ";
    print_r($b);
    echo "<br>"
}
$a=array(90,12,70,55,60);
$b=array(13,44,10,56,50);
$tmp=array();
swap($a,$b,$tmp);
?>