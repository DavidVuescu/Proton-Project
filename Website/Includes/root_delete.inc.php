<?php


if(isset($_POST["Submit"]))
{
    require_once 'dbh.inc.php';
    require_once 'extras.inc.php';

    $id=$_POST["delID"];
    delete($linkDB, $id);
}
else 
{
    header("location: ../sudo.php?error");
    exit();
}
