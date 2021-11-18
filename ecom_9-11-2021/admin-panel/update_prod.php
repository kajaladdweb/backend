<?php

session_start();
include 'connection.php';

if($_SESSION['email']==''){
header('Location:login.php');
}
else{
$email=$_SESSION['email'];
$id=$_GET['pid'];

$query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die('Error in query');

$row1=mysqli_fetch_array($query1);
echo "<center><h4>Hello ".$row1['a_name']."</h4></center>";

$query2=mysqli_query($con," select * from product_detail where p_id='$id' ") or die();
$row2=mysqli_fetch_array($query2);

	$p_name=$row2['p_name'];
	$p_price=$row2['p_price'];
	$p_desc=$row2['p_desc'];
	$p_image=$row2['p_image'];
	$c_name=$row2['c_name'];
	$is_active=$row2['is_active'];
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
		<form method="POST" enctype="multipart/form-data">
			<table >
				<tr>
					<td> <label for="name">Enter Product Name</label> </td>
					<td> <input type="text" name="p_name" id="p_name" value="<?php echo $p_name ?>"> </td>
				</tr>

				<tr>
					<td> <label for="name">Enter Product Price</label> </td>
					<td> <input type="text" name="p_price" id="p_price" value="<?php echo $p_price ?>"> </td>
				</tr>

				<tr>
					<td> <label for="name">Enter Product Description</label> </td>
					<td> <textarea name="p_desc" id="p_desc" ><?php echo $p_desc ?></textarea> </td>
				</tr>


				<tr>
					<td><label for="name">Enter Product Image</label></td>
					<td><img src="../images/<?php echo $p_image ?>" style="width:100px;height:100px" alt="">
					
					<input type="file" name="p_image">
					</td>


				</tr>

				
				<tr>
					<td> <label for="name">Enter Activation</label> </td>
					<td><input type="number" name="is_active" id="is_active" min="0" max="1" value="<?php echo $is_active ?>"></td>

				</tr>

				<tr>
       				 <td><label for="c_name">Select Category Name:</label></td>
              		  <td class="c_name">
		                <select name="c_name" id="c_name" value="<?php echo $c_name ?>">
							<option><?php echo $c_name?></option>
		                    <option value="Men">Men</option>
		                    <option value="Women">Women</option>
		                    <option value="Accessories">Accessories</option>
		                    <option value="Electronics">Electronics</option>
		                </select>
				</tr>
			
				<tr>
					<td colspan="2"><input type="submit" name="update" class="btn" value="submit">

					<a href="dashboard1.php" class="btn"> Back</a></td>
				</tr>
			</table>
		</form>

	</center>
</body>
</html>

<?php



if(isset($_POST['update']))
{

	$p_name=$_POST['p_name'];
	$p_price=$_POST['p_price'];
	$p_desc=$_POST['p_desc'];
	$c_name=$_POST['c_name'];
	$is_active=$_POST['is_active'];


	include 'connection.php';
	move_uploaded_file($_FILES["p_image"]["tmp_name"], $filepath);
	if($_FILES["p_image"]["size"]==0){
        $filepath=$p_image;
    }else{
        $filepath = "../images/" . $_FILES["p_image"]["name"];
    }


$sql="update product_detail set p_name='$p_name',p_price='$p_price',p_desc='$p_desc',p_image='$filepath',c_name='$c_name',is_active='$is_active' where p_id=$id";


$query=mysqli_query($con,$sql) or die("Error in Query");


if($query){
echo "data update";
 header('Location:dashboard1.php');
}else{

echo "Error in update";
}

}

?>