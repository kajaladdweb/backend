

<?php
     $cost=$_POST["cost"];
     $sell=$_POST["sell"];
     $total;

     $profit=$sell+$cost;
     echo $profit;
    echo "<br>";

     $loss=$sell-$cost;
     echo $loss;
     echo "<br>";


if ($sell == $cost)
{
echo "No profit nor Loss";
}
elseif($sell > $cost) 
{echo " Profit ";
}
else
{
echo " Loss ";
}


?>