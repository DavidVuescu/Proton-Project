<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<link rel="stylesheet" href="../Style/authenticate.css">
<div class="LoginBody"> <form action="Includes/new_user.inc.php" method="post">


    <h3 class="LoginHeader">SIGN UP</h3>
    
    <div class="LoginOptions"> 
    
        <div class="InputBody">
            <input type="text" name="Name" placeholder="Username" class="InputBox"> <br>
            <input type="text" name="Mail" placeholder="E-mail Adress" class="InputBox"> <br>
            <input type="password" name="Pass" placeholder="Password" class="InputBox"><br>
            <input type="password" name="PassConfirm" placeholder="Retype Password" class="InputBox"><br>
        </div>

        <?php
        if (isset($_GET["error"])) 
        {
            if ($_GET["error"] == "emptyinput")
            {
                echo "<h4>All fields are mandatory!</h4>";
            }
            else if ($_GET["error"] == "invalidusername")
            {
                echo "<h4>Please enter a valid username!</h4>";
            }
            else if ($_GET["error"] == "invalidemail")
            {
                echo "<h4>Please enter a valid E-mail adress!</h4>";
            }
            else if ($_GET["error"] == "passwordsnotmatching")
            {
                echo "<h4>Passwords not matching!</h4>";
            }
            else if ($_GET["error"] == "usernamealreadyexists")
            {
                echo "<h4>User already exists!</h4>";
            }
            else if ($_GET["error"] == "stmtfailed")
            {
                echo "<h4>Uh-oh, something went wrong, try again</h4>";
            }
            else if ($_GET["error"] == "none")
            {
                echo "<h2>Sign up successful</h2>";
            }
        }
        ?>

        
    </div>

    <div class="LoginButtons">
        <button type="submit" name="Submit" id="Butt_Login">Next</button>
    </div>
          

</form> </div>

<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
