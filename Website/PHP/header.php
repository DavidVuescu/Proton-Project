<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../Style/header.css">
        <script src="../JS/dropdown.js"></script>

        <title>The Proton Project</title>
    </head>


    <body>

        <header>

            <nav>
                <a href="landing.php"> <img src="../Images/The Proton Project Simple Logo.png" class="Logo"> </a>
                <div class="toggle" onclick="ToggleMenu()"></div>
                <ul class="navigation">
                    <li><a href="about_us.html" class="BenjaminButton"> About </a></li>
                    <?php
                        if (isset($_SESSION["userName"]))
                        {
                            echo "<li><a href='includes/logout.inc.php' id='LoginID' class='BenjaminButton'> Log Out </a></li>";
                        }
                        else
                        {
                            echo "<li><a href='login.php' id='LoginID' class='BenjaminButton'> Login </a></li>";
                            echo "<li><a href='new_user.php' id='LoginID' class='BenjaminButton'> Sign Up </a></li>";
                        }
                    ?>
                </ul>
            </nav>

        </header>

        <div class="wrapper">
