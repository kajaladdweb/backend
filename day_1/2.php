
<?php

$seconds = 6000;

$sec = $seconds % 60;
$hrs = $seconds / 60;
$mins = $hrs % 60;
$hrs = $hrs / 60;
echo "seconds:".$seconds;
echo "<br>";
echo ("HH:MM:SS-> " . (int)$hrs . ":" . (int)$mins . ":" . (int)$sec);

?>