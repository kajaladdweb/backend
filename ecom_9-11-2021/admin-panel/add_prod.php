
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
    <title>signup</title>
    <style type="text/css">
       .container
        {
            text-align:right;
        }

         table
            {
                margin-top: 20px;
            }

</style>
 
</head>
<body>
<center>

    <!-- nav bar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php"><img src="../images/logo-01.png" alt=""></a>
     <div class="container">
            <a href="logout.php" class="btn">logout</a>
    </div>
    </div>
    </nav>

    <!-- nav bar ends -->

<form action="add_prod.php" method="POST" enctype="multipart/form-data">

<table>
    <tr style="background-color:pink;">
        <td colspan='2'><label>Category</label></td>  
    </tr>

    <tr>
        <td>
            <label for="p_name">Enter Product:</label>
        </td>
        <td> <input type="text" name="p_name" placeholder="Enter Product name"></td>
    </tr>

    <tr>
        
        <td>
         <label for="p_price">Enter Product Price:</label>
         </td>
        <td> <input type="text" name="p_price" placeholder="Enter Product price"></td>
    </tr>

    <tr>

    <td>
         <label for="p_desc">Enter Product Description:</label>
         </td>
        <td> <textarea name="p_desc" placeholder="Enter Product description" cols="24" rows="5"></textarea></td>
    </tr>

    <tr>
        <td>
            <label for="p_image">Enter Product Image:</label>
         </td>
        <td style="padding-left:60px;"><input type="file" name="p_image"></td>
    </tr>

    <tr>

    <td>
        <label for="c_name">Select Category Name:</label></td>
                <td class="c_name">
                <select name="c_name" id="c_name">
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Electronics">Electronics</option>
                </select>
     </td>
    </tr>
  
 
    <tr>
        <td colspan='2'><input type="submit" name="add" class="btn" value="Add">
   
        <a href="dashboard1.php" class="btn"> Back</a></td> 
    </tr>
</table>
</form>

</center>
</body>
</html>

<?php
session_start();
include 'connection.php';


if(isset($_POST['add']))
{
    
    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $p_desc=$_POST['p_desc'];
    $c_name=$_POST['c_name'];
    $filepath = "../images/" . $_FILES["p_image"]["name"];
  
    
    $query="insert into product_detail(p_name,p_price,p_desc,p_image,c_name) values('$p_name','$p_price','$p_desc','$filepath','$c_name')" or die("error in query");
    echo $query;
    

move_uploaded_file($_FILES["p_image"]["tmp_name"], $filepath);

    if(mysqli_query($con,$query))
    {
        header('Location:dashboard1.php');
    }
    else
    {
        echo "failed";
    }

}
?>