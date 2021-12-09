


<?php

include 'connection.php';


$id=$_GET['sid'];

$sql="delete from student where s_id=$id";

$query=mysqli_query($con,$sql) or die("Error in Query");


if($query){
echo "data deleted";
header('Location:dashboard.php');
}else{
echo "Error in deletion";
}

mysqli_close($con);


?>