<?php
    $salary=10000;


$da = $salary * 0.4;
$hra = $salary * 0.2;
$pf=$salary*0.3;
$medical=$salary*0.2; 



$total_sal = ($salary + $da + $hra) - ($pf + $medical);
echo "salary:".$salary;
echo " <br>";
echo "Gross Salary Of Employee : ".$total_sal;

?>
