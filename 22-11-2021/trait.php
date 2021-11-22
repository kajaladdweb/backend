<?php

trait reader
{
    public function add($val1,$val2)
    {
        return $val1+$val2;
    }

}
trait writer
{
    public function mul($val1,$val2)
    {
        return $val1*$val2;
    }

}
class File
{
    use reader;
    use writer;
    public function calc($var1,$var2)
    {
        echo "add:".$this->add($var1,$var2);


        echo "mul:".$this->add($var1,$var2);
    }
}
$o=new File();
$o->calc(5,4);

?>