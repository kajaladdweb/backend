

<?php

$chr=$_POST["chr"];


if($chr>= 'A' && $chr <='Z'){
    echo $chr." is UpperCase Character"."<br>";
}elseif($chr>= 'a' && $chr <= 'z'){
    echo $chr." is LowerCase Character"."<br>";
}else{
    echo "Other";
}

?>