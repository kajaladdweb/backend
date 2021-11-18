
<?php
include 'conection.php';

$sql = "Select * from images";

$query =mysqli_query($con, $sql);
while($row=mysqli_fetch_array($query))
{
echo "<img src=".$row['img_url']." height=200 width=300 /><br/>";
} 


?>