<?php

function getSum($arr_val,$arr_size){
    $total_sum=0;
    for ($i=0;$i < $arr_size;$i++){
        if($arr_val[$i] % 2 == 0){
            $total_sum += $arr_val[$i];            
        }
    }
    echo "Total Of All Even Number in Array is : ".$total_sum;
}

$arr_val=array(2,3,4,5,6);
print_r($arr_val);
echo "<br>";
$arr_size=sizeof($arr_val);

getSum($arr_val,$arr_size);

    
?>
