<?php

    $num=$_POST["num"];

    $sum=0;
    for($i=1;$i<$num;$i++)
    {
        if($num%$i==0)
        {
           
            $sum = $sum + $i;
        }
    }
    if($sum==$num)
    {
        echo $num." is perfect";

    }
    else{

        echo $num." is not perfect";
    }

?>