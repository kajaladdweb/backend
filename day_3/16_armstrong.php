
<?php

    $num=$_POST["num"];
    $sum=0;
    $new=$num;

    while($new!=0)
    {

            $rem=$new%10;
            $sum=$sum+($rem*$rem*$rem);
            $new=$new/10;

    }

    if($sum==$num){
        echo "The Given Number is Armstrong";
    }
    else{
        echo "The Given Number is not Armstrong";
    }
?>