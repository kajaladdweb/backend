<?php

include '../admin-panel/connection.php';


$cart_id=$_GET['cartid'];
$sql="delete from cart where cart_id=$cart_id";

$query=mysqli_query($con,$sql) or die("Error in Query.");


if($query){
    	
   header('Location:cart-1.php');
    }
else{
    echo "<script>alert('Error in delete.)</script>";
}
?>