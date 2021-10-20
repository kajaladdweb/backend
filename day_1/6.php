
<?php

$basic_salary=10000;


$da = $basic_salary * (40/100);
$hra = $basic_salary * (20/100);

$gross = $basic_salary + $da + $hra;

echo "basic salary : ".$basic_salary;
echo "<br>";
echo "Gross Salary Of Employee : ".$gross;

?>
