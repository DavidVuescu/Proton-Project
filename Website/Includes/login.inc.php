<?php

if (isset($_POST["Submit"]))
{
    $username = $_POST["userID"];
    $pass = $_POST["Pass"];

    require_once 'dbh.inc.php';
    require_once 'extras.inc.php';

    if (emptyLogin($username, $pass) == true)
    {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($linkDB, $username, $pass);
}
else
{
    header("location: ../login.php");
    exit();
}
