<?php

    abstract class car
    {
        public $name;
        public function __construct($name)
        {
            $this->name=$name;
        }
        abstract public function intro():string;
    }

    class audi extends car
    {
        public function intro():string
        {
            return "choose audi $this->name";
        }
    }


    
    class volvo extends car
    {
        public function intro():string
        {
            return "choose volvo $this->name";
        }
    }


    $audi=new audi("audi");
    echo $audi->intro();
    echo "<br>";


    $volvo=new volvo("volvo");
    echo $volvo->intro();
    echo "<br>";
?>