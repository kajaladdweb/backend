<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        th{
            text-align:center;
            background-color:pink;
        }
        .container
        {
            text-align:right;
        }
        a:hover
        {
            color:Red;
        }
    </style>
</head>
<body>
    <!-- <input type="submit" name="logout" value="logout"> -->
    <div class="container">
    <a href="logout.php" class="btn">logout</a>
    </div>
</body>
</html>

<?php
session_start();
include 'connection.php';

if($_SESSION['email']==''){
    header('Location:login.php');
}

 else{

    $email=$_SESSION['email'];
    $query1=mysqli_query($con,"select s_name from student where s_email='$email'");

    $row1=mysqli_fetch_array($query1);
   


    echo "<center><h4>Hello ".$row1['s_name']."</h4></center>";
 }
 

echo "<center><table class='table-primary' border='2'>
    <th>ID</th> 
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
    <th>MOBILE</th>
    <th>Edit</th>
    <th>Delete</th></center>";
    
$sql="select * from student";

$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query))
{
    $sid=$row['s_id'];
    echo "<tr>";
    echo "<td>".$row['s_id']."</td>";
    echo "<td>".$row['s_name']."</td>";
    echo "<td>".$row['s_email']."</td>";
    echo "<td>".$row['s_pwd']."</td>";
    echo "<td>".$row['s_mob']."</td>";

    echo "<td><a href=update1.php?sid=$sid>Edit</a></td>";

    echo "<td><a href=delete.php?sid=$sid>Delete</a> </td>";
    echo "</tr>";
}
echo "</table>";
?>