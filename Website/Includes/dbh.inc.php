<?php

$serverName = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "ProtonBase";

$linkDB = mysqli_connect($serverName, $DBuser, $DBpass, $DBname);

if (!$linkDB)
{
    die("Connection to Database Failed" . mysqli_connect_error());
}
