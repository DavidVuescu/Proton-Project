<?php

function emptyInput($name, $mail, $pass, $passConf)
{
    if (empty($name)) return true;
    if (empty($mail)) return true;
    if (empty($pass)) return true;
    if (empty($passConf)) return true;

    return false;
}

function InvalidUid($name)
{
    $c = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) $c = true;
    
    return $c;
}

function InvalidEmail($mail)
{
    $c = false;
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) $c = true;
    
    return $c;
}

function MatchingPasswords($pass, $passConf)
{
    $c = false;
    if ($pass !== $passConf) $c = true;
    
    return $c;
}

function ExistingUid($linkDB, $name, $mail)
{
    $sql = "SELECT * FROM users WHERE usersNAME = ? OR usersEMAIL = ?;";
    $stmt = mysqli_stmt_init($linkDB);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../new_user.php?error=statementfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $mail);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) 
    {
        return $row;
    }
        else
        {
            $result = false;
            return $result;
        }
    
        mysqli_stmt_close($stmt);
}


function addUser($linkDB, $name, $mail, $pass)
{
    $sql = "INSERT INTO users (usersNAME, usersEMAIL, usersPASS) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($linkDB);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../new_user.php?error=statementfailed");
        exit();
    }

    $hashPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $mail, $hashPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../new_user.php?error=none");
    exit();
}
