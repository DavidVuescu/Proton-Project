<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<?php
    $selector = $_GET['selector'];
    $validator = $_GET['validator'];

    if (empty($selector) || empty($validator))
    {
        echo"Cannot validate request, try again!";
    }
    else
    {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false)
        {
            ?>

                <link rel="stylesheet" href="../Style/change.css">
                <div class="LoginBody"> <form action="Includes/reset_password.inc.php" method="post">

                    <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                    <h3 class="LoginHeader">NEW PASSWORD</h3>
                    
                    <div class="LoginOptions">

                        <div class="InputBody">
                            <input type="password" name="New-Pass" placeholder="New Password" class="InputBox"> <br>
                            <input type="password" name="Repeat-Pass" placeholder="Repeat Password" class="InputBox"> <br>
                        </div>

                    
                    </div>

                    <?php
                        if (isset($_GET["reset"])) 
                        {
                            if ($_GET["reset"] == "success")
                            {
                                echo "<h4>Check your e-mail!</h4>";
                            }
                        }
                    ?>

                    <div class="LoginButtons"> <ul>
                        <li> <button type="submit" name="Change-Submit" id="Butt_Login">Change Password</button> </li>
                    </ul> </div>


                </form></div>

            <?php
        }
    }
?>

<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
