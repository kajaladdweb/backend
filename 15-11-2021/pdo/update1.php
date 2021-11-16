<?php

session_start();
include 'connection.php';

try{
    if($_SESSION['email']==''){
        header('Location:login.php');
    }
    else{
        $id=$_GET['sid'];

        $email=$_SESSION['email'];
        $sql="select s_name from student where s_email='$email'" or die("error in query");
        
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$q->fetch()){
            echo "<center><h5>Hello ".$row['s_name']."</h5></center>";    
        }
    }
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}


try{
    $sql="select * from student where s_id='$id'" or die("error in query");
        
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$q->fetch()){   
        $name=$row['s_name'];
        $email=$row['s_email'];
        $password=$row['s_pwd'];
        $mobno=$row['s_mob'];
    }
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
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
<link href="style.css" rel="stylesheet">
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
<td> <label for="email">Enter Email:</label></td>
<td><input type="email" id="email" name="email" value="<?php echo $email ?>" ></td>
</tr>
<tr>
<td><label for="pwd">Enter Password:</label></td>
<td> <input type="password" name="pwd" id="pwd" value="<?php echo $password ?>"> </td>
</tr>
<tr>
<td> <label for="mobno">Enter Mobile No.</label> </td>
<td> <input type="text" name="mobno" id="mobno" value="<?php echo $mobno ?>"> </td>
</tr>
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
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        $mobileno=$_POST['mobno'];

        include 'connection.php';

        try{
            $sql="update student set s_name='$name',s_email='$email',s_pwd='$password',s_mob='$mobileno' where s_id=$id";
            $pdo->exec($sql);
            header('Location:dashboard.php');
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
}

?>