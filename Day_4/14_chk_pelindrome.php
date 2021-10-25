<?php

 $arr=array('12321','343','868','24342','234');
 $arr_size=sizeof($arr);
 $res=0;
 $new_val=$arr;


 for($i=0;$i<$arr_size;$i++){
    $rem=$new_val[$i]%10;   
    $res=($res * 10) + $rem;
    $new_val=$new_val[$i]/10;
 }

 $new_val=$arr;
 
 print_r($arr);
echo "<br>";
 if ($new_val==$arr){
    echo "Number is palindrome";
 }else{
     echo "Number is not palindrome";
 }
?>