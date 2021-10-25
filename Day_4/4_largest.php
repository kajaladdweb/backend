<?php
    $arr = array(50,250,30,40,70,10,50); // 250  2-times
    $max=$max2=0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max2 = $max;
            $max = $arr[$i];
        } else if (($arr[$i] > $max2) && ($arr[$i] != $max)) {
            $max2 = $arr[$i];
        }
    }
    print_r($arr);
echo "<br>";
    echo "Highest Value is : " . $max . "<br/>"; 
    echo "Second highest value is : " . $max2 . "<br/>"; 
?>