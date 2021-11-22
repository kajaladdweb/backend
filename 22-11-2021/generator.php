<?php
function generator()
{
    yield "zero";
    yield "one";
    yield "two";
}

function generator1()
{
    yield "three";
    yield "four";
    yield "five";
}


function generator2()
{
    yield "six";
    yield "seven";
    yield "eight";
    yield from generator();
    yield "nine";
    yield from generator1();
    yield "ten";


}
foreach(generator() as $val)
{
    echo $val,PHP_EOL;
}

foreach(generator2() as $val)
{
    echo $val,PHP_EOL;
}
?>