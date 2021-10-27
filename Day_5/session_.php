
<html>
</head>
<body>
<FORM method="POST" action="session_.php">

Enter Name : <input type="text" name="name"> <br/>
Enter Age : <input type="text" name="age"> <br/>
<br/>
<input type="submit" name="Sub1" value="Create Session">
<input type="submit" name="Sub2" value="Retrieve Session">
<input type="submit" name="Sub3" value="Delete Session">
</FORM>

<?php
session_start();

if(isset($_POST["Sub1"]))
{
$_SESSION["name"]=$_POST["name"];
$_SESSION["age"]=$_POST["age"];
echo "Session Created !!";
}

elseif(isset($_POST['Sub2']))
{
if(isset($_SESSION["name"]))
{
echo "Name = ". $_SESSION["name"]."<br/>";
echo "Age = ". $_SESSION["age"]."<br/>";
}
}
elseif(isset($_POST['Sub3']))
{
session_destroy();
echo "Session deleted !!";
}
?>

</body>
</html>