
<?php

    $num=$_POST["num"];
    $ans=0;
    $rem=0;
    $i=0;
    while($i<=strlen($num))
    {
            $rem=$num%10;
            $ans=$ans+$rem;
            $num=$num/10;
            $i++;
    }

    echo "Sum Of all digit is : ".$ans;
?>