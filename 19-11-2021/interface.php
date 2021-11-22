<?php

interface animal
{
    public function sound();
}

class cat implements animal
{
    public function sound()
    {
        echo "meow";
    }
}

class dog implements animal
{
    public function sound()
    {
        echo "bark";
    }
}

$cat=new cat;
$dog=new dog;

$cat->sound();
echo "<br>";
$dog->sound();


?>