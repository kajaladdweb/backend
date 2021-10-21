<?php
    $num = $_POST["num"];
    $cnt = 0;
    for($i=2; $i<=$num; $i++)
    {
        if($num % $i == 0)
        $cnt++;
    }
    if($cnt == 1)
    {
        echo "$num is a prime number";
    }
    else
    {
        echo "$num is not a prime number";
    }
?>