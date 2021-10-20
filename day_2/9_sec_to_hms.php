

<?php

$s = 2000;

$sec = $s % 60;
$hrs = $s / 60;
$mins = $hrs % 60;
$hrs = $hrs / 60;
echo "second:".$s;
echo "<br>";
echo ("HH:MM:SS-> " . (int)$hrs . ":" . (int)$mins . ":" . (int)$sec);

?>