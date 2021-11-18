<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<style type="text/css">
    .container1
    {
        margin-left: 330px;
    }
</style>
<title>Login</title>
</head>
<body>
    <!-- nav bar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="dashboard.php"><img src="../images/logo-01.png" alt=""></a>

    <!-- <div class="container1">
    <a href="logout.php" class="btn">logout</a>
    
    <a href="dashboard1.php" class="btn">Back</a>
    </div> -->
    </div>
    </nav>
    <center>
    
        <form action="login.php" method="post">
            <table>

    <tr style="background-color:pink;">
        <td><label>Login</label></td>  
    </tr>
            <tr>
                 <td> <input type="email" name="email" id="" placeholder="enter your email"></td>
            </tr>
            <tr>
                <td> <input type="password" name="password" id="" placeholder="enter your password"></td>
            </tr>

            <tr>
                <td>
                <input type="checkbox" name="remember">  
                <label for="remember-me">Remember me</label>  
                </td>
            </tr>


        
            <tr>
                <td><input type="submit" name="login" value="LOGIN" class="btn">
            
                 <a href="signup.php" class="btn"> SignUp</a></td>
            </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php

include 'connection.php';
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from admin where a_email='$email' and a_password='$password'" or die("error in query");

    $query=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query);
    if($rows>0)
    {
        if(isset($_POST["remember"]))   
        {  
            setcookie ("email",$email);  
            setcookie ("password",$password);
            $_SESSION['email']=$email;
        }  
        header("Location:dashboard1.php");
    }
    else
    {
        echo "incorrect email and password";
    }

}

?>