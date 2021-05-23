<?php

if (isset($_POST["Change-Submit"]))
{
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["New-Pass"];
    $passwordR = $_POST["Repeat-Pass"];


    
    if (empty($password) || empty($passwordR))
    {
        header("location: ../landing.php");
        exit();
    }
    else if ($password !== $passwordR) 
    {
        header("location: ../landing.php");
        exit();
    }

    $Date = date("U");

    require 'dbh.inc.php';
    $sql = "SELECT * FROM passReset WHERE passResetSELECTOR=? AND passResetEXPIRE>=?";
    $stmt = mysqli_stmt_init($linkDB);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "There was an error connecting to db";
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $Date);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result))
        {
            echo "something went wrong. Please resubmit your request.";
            exit();
        }
        else
        {
            $tokenBinary = hex2bin($validator);
            $tokenChecker = password_verify($tokenBinary, $row["passResetTOKEN"]);

            if ($tokenChecker === false)
            {
                echo "something went wrong. Please resubmit your request.";
                exit();
            }
            else if ($tokenChecker === true) 
            {
                $tokenEmail = $row['passResetEMAIL'];
                $sql = "SELECT * FROM users WHERE usersEMAIL=?;";
                $stmt = mysqli_stmt_init($linkDB);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "There was an error connecting to db";
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result))
                    {
                        echo "External error occured!";
                        exit();
                    }
                    else
                    {
                        $sql = "UPDATE users SET usersPASS=? WHERE usersEMAIL=?;";
                        $stmt = mysqli_stmt_init($linkDB);
                        if (!mysqli_stmt_prepare($stmt, $sql))
                        {
                            echo "There was an error connecting to db";
                            exit();
                        }
                        else
                        {
                            $hasheroo = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $hasheroo, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM passReset WHERE passResetEMAIL=?";
                            $stmt = mysqli_stmt_init($linkDB);
                            if (!mysqli_stmt_prepare($stmt, $sql))
                            {
                                echo "There was an error connecting to db";
                                exit();
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("location: ../login.php?password=new");
                            }
                        }
                    }
                }
            }
        }
    }
}

else
{
    header("location: ../landing.php");
    exit();
}
