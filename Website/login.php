<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<link rel="stylesheet" href="../Style/login.css">
<div class="LoginBody"> <form action="Includes/login.inc.php" method="post">


    <h3 class="LoginHeader">LOGIN</h3>
    
    <div class="LoginOptions">

        <div class="InputBody">
            <input type="text" name="userID" placeholder="Username or Email" class="InputBox"> <br>
            <input type="password" name="Pass" placeholder="Password" class="InputBox"><br>
        </div>

        <input type="checkbox" ID="remember" name="remember">
        <label for="remember" class="Remember">Remember me</label>
        <a href="#" class="Forget">Forgot password?</a>

    
    </div>

    <?php
        if (isset($_GET["error"])) 
        {
            if ($_GET["error"] == "emptyinput")
            {
                echo "<h4>All fields are mandatory!</h4>";
            }
            else if ($_GET["error"] == "invalidlogin")
            {
                echo "<h4>Login info does not match!</h4>";
            }
            else if ($_GET["error"] == "stmtfailed")
            {
                echo "<h4>Uh-oh, something went wrong, try again</h4>";
            }
        }
    ?>

    <div class="LoginButtons"> <ul>
        <li> <a href="new_user.php" id="Butt_NewAcc">Create New Account</a> </li>
        <li> <button type="submit" name="Submit" id="Butt_Login">Login</button> </li>
    </ul> </div>


</form></div>

<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
