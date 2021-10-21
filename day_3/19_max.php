<?php 

$no=$_POST['num'];
$c=0;
while($no!=0)
{
    if($no>$c)
    {
        $c=$no;
    }
}
echo $c;

?>
