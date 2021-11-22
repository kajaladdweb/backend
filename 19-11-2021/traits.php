<?php
trait msg1
{
    public function msg1()
    {
        echo "msg1";
    }

}
trait msg2
{


    public function msg2()
    {
        echo "msg2";
    }

}

class wlcm
{
    use msg1;
}
 class wlcm2
 {
     use msg1,msg2;
 }

$obj=new wlcm();
$obj->msg1();
echo "<br>";
$obj2=new wlcm2();
echo "<br>";
$obj2->msg1();
echo "<br>";
$obj2->msg2();

?>