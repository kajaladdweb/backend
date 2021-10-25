<?php

function CountTheElements($arr, $n, $k)
{
	$counter = 0;

	for ($i = 0; $i < $n; $i++)
	{
		if ($arr[$i] % $k == 0)
			$counter++;
	}

	return $counter;
}

// Driver code
$arr = array( 2, 6, 10, 20, 100, 18 );
$n = count($arr);
$k = 5;

echo "Total Number divided by 5 = ".CountTheElements($arr, $n, $k);

?>
