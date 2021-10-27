<?php
session_start();
$_SESSION['test']='test';

if(isset($_GET['submit']))
{
    header('location: session.php')
}
?>