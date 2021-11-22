<?php

class a
{
    private $x=1;
}
$val=function()
{
    return $this->x;
};
print($val->call(new A));
?>