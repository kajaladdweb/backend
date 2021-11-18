<?php

session_start();
include 'connection.php';




if($_SESSION['email']==''){
header('Location:login.php');
}
else{



$email=$_SESSION['email'];
$id=$_GET['cid'];

$query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die('Error in query');

$row1=mysqli_fetch_array($query1);
echo "<center><h4>Hello ".$row1['a_name']."</h4></center>";

$query2=mysqli_query($con," select * from category where c_id='$id' ") or die();
$row2=mysqli_fetch_array($query2);

$name=$row2['c_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<title>Update Data</title>
</head>
<body>
    <center>
<form method="POST">
<table >
<tr>
<td> <label for="name">Enter Name</label> </td>
<td> <input type="text" name="name" id="name" value="<?php echo $name ?>"> </td>
</tr>
<tr>
<tr>
<td colspan="2"><input type="submit" name="update" class="btn" value="submit">

<a href="dashboard.php" class="btn"> Back</a></td>
</tr>
</table>
</form>
</body>
</center>
</html>

<?php

if(isset($_POST['update'])){

$name=$_POST['name'];

include 'connection.php';

$sql="update category set c_name='$name' where c_id=$id";

$query=mysqli_query($con,$sql) or die("Error in Query");


if($query){
echo "data update";
header('Location:dashboard1.php');
}else{
echo "Error in update";
}

mysqli_close($con);
}

?>