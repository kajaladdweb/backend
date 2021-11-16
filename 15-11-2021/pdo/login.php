<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
<title>Login</title>
</head>
<body>
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
                <input type="checkbox"  id="" name="remember">Remeber me
                <!-- <label class="form-check-label" for="exampleCheck1">Remember me </label> -->
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
    $_SESSION['email']=$email;
            }  
            header("Location:dashboard.php");

        
include "connection.php";
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    try{
        $sql="select * from student where s_email='$email' and s_pwd='$password'" or die("error in query");
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$q->fetch())
        {   
            if(isset($_POST["remember"]))   
            {  
                setcookie ("email",$email);  
                setcookie ("password",$password);
            }
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

}
?>