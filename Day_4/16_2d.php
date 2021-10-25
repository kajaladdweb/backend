<?php

$mymultiarray = array(
    array("Cycle" => 2, "Bike" => 5, "Car" => 9),
    array("Cycle" => 3, "Bike" => 6, "Car" => 10),
    array("Cycle" => 5, "Bike" => 8, "Car" => 12)
);

$sumMulArray = 0;
foreach ($mymultiarray as $subArray) {
    foreach ($subArray as $mulKey=>$mulValue) 
    {
        $sumMulArray += $mulValue;
    }
}

echo "The sum of numbers in multidimensional array is: ".$sumMulArray;
?>