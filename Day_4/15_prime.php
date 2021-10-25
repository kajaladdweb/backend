<?php

function primeCount($arr, $n)
{
	$max = max($arr);
	$prime = array_fill(0, $max+ 1, true);

	$prime[0] = false;
	$prime[1] = false;
	for ($p = 2; $p * $p <= $max; $p++)
	{

		if ($prime[$p] == true)
		{

			for ($i = $p * 2;
				$i <= $max; $i += $p)
				$prime[$i] = false;
		}
	}

	$count = 0;
	for ($i = 0; $i < $n; $i++)
		if ($prime[$arr[$i]])
			$count++;

	return $count;
}

$arr = array(3, 4, 9);
$n = sizeof($arr);

echo "array:";
print_r($arr);
echo "<br>";
echo primeCount($arr, $n);

?>