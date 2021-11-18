
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
<center>

<form action="add_category.php" method="POST">

<table>
    <tr style="background-color:pink;">
        <td><label>Category</label></td>  
    </tr>

    <tr>
        <td> <input type="text" name="c_name" placeholder="Enter Category name"></td>
    </tr>
  
    
    <tr>
        <td><input type="submit" name="add" class="btn" value="Add">
   
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

    $c_name=$_POST['c_name'];

    
    $query="insert into category(c_name) values('$c_name')" or die("error in query");
    echo $query;
    
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