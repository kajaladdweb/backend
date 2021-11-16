
<?php

include 'connection.php';

try
{
$id=$_GET['sid'];

$sql="delete from student where s_id=$id";

$q = $pdo->query($sql);

header("Location:dashboard.php");

}


catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

?>