<?php

if (isset($_POST["Reset-Submit"]))
{
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost/Proton-Project/Website/password-change.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expire = date("U") + 1000;



    require "dbh.inc.php";

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM passReset WHERE passResetEMAIL=?;";
    $stmt = mysqli_stmt_init($linkDB);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("There was an error connecting to db");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO passReset (passResetEMAIL, passResetSELECTOR, passResetTOKEN, passResetEXPIRE) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($linkDB);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("There was an error connecting to db");
        exit();
    }
    else
    {
        $hashToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expire);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($linkDB);

    $to = $userEmail;
    $subject = "Reset your password for the Proton Project";
    $message = "<p>Your account has recently submitted a password reset request.</p>";
    $message .="<p>Here is the link to reset your password: <br>";
    $message .='<a href="' . $url . '"> ' . $url . '</a></p>';

    $MailHeaders = "From: Proton <project.recovery.mailaroo@gmail.com>\r\n";
    $MailHeaders .= "Reply-To <project.recovery.mailaroo@gmail.com>\r\n";
    $MailHeaders .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $MailHeaders);

    header("location: ../password-reset.php?reset=success");
    exit();
}

else
{
    header("location: ../login.php");
    exit();
}
