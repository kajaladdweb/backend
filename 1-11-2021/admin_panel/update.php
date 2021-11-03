

<?php

    include 'connection.php';

    $id=$_GET['sid'];
    $email=GET['semail'];   
    $query1=mysqli_query($con,"select s_name from student where email='$s_email'")or die();
    $row1=mysqli_fetch_array($query1);
    echo "hello".$row1['s_name'];
 
    $query2=mysqli_query($con,"select * from student where id='$s_id'")or die();
    $row2=mysqli_fetch_array($query2);

    $sname=$row2['s_name'];
    $semail=$row2['s_email'];
    $spwd=$row2['s_pwd'];
    $smob=$row2['s_mob'];
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>

<form  method="POST">
    <input type="text" name="name" value="<?php echo $sname ?>" placeholder="Enter name">
    <br></br>
    <input type="email" name="email" value="<?php echo $semail ?>" placeholder="Enter email">
    <br></br>
    <input type="password" name="pwd" value="<?php echo $spwd ?>"  placeholder="Enter password">
    <br></br>
    <input type="text" name="mob" value="<?php echo $smob ?>"  placeholder="Enter MobileNo.">
    <br></br>
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
   

    $sname=$_POST['name'];
    $semail=$_POST['email'];
    $spwd=$_POST['pwd'];
    $smob=$_POST['mob'];
    $sql="update student set s_name='$sname',s_email='$semail',s_pwd='$spwd',s_mob='$smob' where s_id='$sid'";
    $query=mysqli_query($con,$sql);
  
        if($query)
        {     
            echo "data updated";
        }   
        else
        {
            echo "error";
        }

}

?>

