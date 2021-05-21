<?php

if (isset($_POST["Submit"]))
{
    $name = $_POST["Name"];
    $mail = $_POST["Mail"];
    $pass = $_POST["Pass"];
    $passConf = $_POST["PassConfirm"];

    require_once 'dbh.inc.php';
    require_once 'extras.inc.php';

    if (emptyInput($name, $mail, $pass, $passConf) == true)
    {
        header("location: ../new_user.php?error=emptyinput");
        exit();
    }
    if (InvalidUid($name) !== false)
    {
        header("location: ../new_user.php?error=invalidusername");
        exit();
    }
    if (InvalidEmail($mail) !== false)
    {
        header("location: ../new_user.php?error=invalidemail");
        exit();
    }
    if (MatchingPasswords($pass, $passConf) !== false)
    {
        header("location: ../new_user.php?error=passwordsnotmatching");
        exit();
    }
    if (ExistingUid($linkDB, $name, $mail) !== false)
    {
        header("location: ../new_user.php?error=usernamealreadyexists");
        exit();
    }

    addUser($linkDB, $name, $mail, $pass);
}

else
{
    header("location: ../new_user.php");
    exit();
}
