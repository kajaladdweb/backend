




<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
    <title>signup</title>

 
</head>
<body>
<center>

<form  method="POST" >

<table>
    <tr style="background-color:pink;">
        <td><label>Sign UP</label></td>  
    </tr>
    <tr>
        <td> <input type="text" name="name" placeholder="Enter name"></td>
    </tr>
    <tr>
        <td> <input type="email" name="email" placeholder="Enter email"></td>
    </tr>
    <tr>
        <td><input type="password" name="pwd" placeholder="Enter password"></td> 
    </tr>
    <tr>
        <td><input type="password" name="cn_pwd" placeholder="Confirm password"></td> 
    </tr>
    <tr>
        <td><input type="text" name="mob" placeholder="Enter MobileNo."></td> 
    </tr>
    <tr>
        <td><input type="submit" name="submit" class="btn" value="Sign UP" >
   
        <a href="login.php" class="btn"> Login</a></td> 
    </tr>
</table>
</form>

</center>
</body>
</html>

<?php

    include 'connection.php';

    if(isset($_POST['submit']))
{
   

        if($_POST['pwd']===$_POST['cn_pwd'])
        {
        $sname=$_POST['name'];
        $semail=$_POST['email'];
        $spwd=$_POST['pwd'];
        $smob=$_POST['mob'];
        $query="insert into student(s_name,s_pwd,s_mob,s_email) values ('$sname','$spwd','$smob','$semail')";
    
            if(mysqli_query($con,$query))
            {   
                header("location:login.php");
            }     
            else
            {
                echo "error";
            }
        }
        else{   
              echo "<script>alert('password not match');</script>"; 
        }

}

?>