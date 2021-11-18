<?php

session_start();
include 'connection.php';

if($_SESSION['email']==''){
    header('Location:login.php');
}
else{

$id=$_GET['p_id'];
$email=$_SESSION['email'];

$query1=mysqli_query($con,"select a_name from admin where a_email='$email'") or die('Error in query');

$row1=mysqli_fetch_array($query1);
echo "<center><h5>Welcome ".$row1['a_name']."</h5></center>";

$query2=mysqli_query($con," select * from product_detail where p_id='$id' ") or die("Error in query");
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
<title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr style="background-color:#d8dfed;">
                <td colspan="2" style="padding-bottom: 20px;">
                <label for="update">UPDATE PRODUCT</label>
                </td>
            </tr>
            <tr>
                <td> <label for="p_name">Enter Product Name:</label> </td>
                <td> <input type="text" class="input-value" name="p_name" id="p_name" value="<?php echo $p_name ?>"> </td>
            </tr>
            <tr>
                <td> <label for="p_price">Enter Product Price:</label> </td>
                <td> <input type="text" class="input-value" name="p_price" id="p_price" value="<?php echo $p_price ?>"> </td>
            </tr>
            <tr>
                <td><label for="p_desc">Enter Product Description:</label></td>
                <td><textarea name="p_desc" class="input-value" cols="24" rows="5" id=""><?php echo $p_desc ?></textarea></td>
            </tr>
            <tr>
                <td><label for="file">Select Image:</label></td>
                <td style="padding-left: 1%;">
                <img src="../images/<?php echo $p_image ?>" style="width:100px;height:100px" alt="">
                <input type="file" name="file" > 
                </td>
            </tr>
            <tr>
                <td><label for="c_name">Select Category Name:</label></td>
                <td class="c_name">
                <select name="c_name" value="<?php echo $c_name ?>" id="c_name">
                    <option><?php echo $c_name ?></option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Kids">Kids</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> <label for="is_active">Enter Product Activation:</label> </td>
                <td> <input type="number" min="0" max="1" class="input-value" name="is_active" id="is_active" value="<?php echo $is_active ?>"> </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 20px;"><input type="submit" class="btn" name="update" value="SUBMIT">
                <a href="view_products.php" class="btn">BACK</a></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['update'])){

    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $p_desc=$_POST['p_desc'];
    $filepath = "../images/" . $_FILES["file"]["name"];
    $selected=$_POST['c_name'];
    $is_active=$_POST['is_active'];



    include 'connection.php';
    move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);


    $sql="update product_detail set p_name='$p_name', p_price='$p_price', p_desc='$p_desc', p_image='$filepath', c_name='$selected', is_active='$is_active' where p_id=$id" or die("Error in Query");

    $query=mysqli_query($con,$sql); 


        if($query)
        {
            header('Location:dashboard.php');
        }
        else
        {
            echo "failed";
        }
}

?>