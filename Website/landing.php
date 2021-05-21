<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<link rel="stylesheet" href="../Style/landing_page.css">
<div class="MainText">
    <?php
        if (isset($_SESSION["userName"]))
        {
            echo "<h1 class='ScreenCenterText'>Welcome, " . $_SESSION["userName"] . "</h1>";
            echo "<a href='site.php' class='LoginButton'> ENTER </a>";
        }
        else
        {
            echo "<h1 class='ScreenCenterText'>WELCOME TO THE PROTON PROJECT</h1>";
            echo "<a href='login.php' class='LoginButton'> ACCESS PROTON </a>";
        }
    ?>
</div>
<img src="../Videos/Earth.gif" class="MainGif">

<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
