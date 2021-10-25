<?php
    
    $ar = array(90,29,23,56);
    $br = array(98,56,43,12);

    function print_a($a){
        for($i = 0; $i<count($a); $i++){
            echo $a[$i]." ";
        }
    }
    echo "Before Swap:<br>";
    echo " : First Array <br>".print_a($ar);
    echo " = Second Array ".print_a($br);

    function swp(&$a, &$b){
        for($i = 0; $i < count($a); $i++){
            $a[$i] = $a[$i] + $b[$i];
            $b[$i] = $a[$i] - $b[$i];
            $a[$i] = $a[$i]-$b[$i];
        }
    }

    swp($ar, $br);
    echo "<br><br>After Swap:<br>";
    echo " : First Array <br>".print_a($ar);
    echo " : Second Array ".print_a($br);
?>