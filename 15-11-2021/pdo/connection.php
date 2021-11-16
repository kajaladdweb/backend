<?php

    try
    {
        $pdo=new PDO("mysql:host=localhost;dbname=admin_panel","root","");

    }
    catch(PDOEXCEPTION $e)
    {
        die("coudn't connect". $e->getMessage());
    }
?>