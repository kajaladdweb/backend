


<?php

include 'connection.php';


$id=$_GET['pid'];

$sql="delete from product_detail where p_id=$id";

$query=mysqli_query($con,$sql) or die("Error in Query");


if($query){
echo "data deleted";
header('Location:dashboard1.php');
}else{
echo "Error in deletion";
}

mysqli_close($con);


?>