<?php
    include_once '../Website/PHP/header.php'
?>

    <!-- <div class="wrapper"> -->
    <link rel="stylesheet" href="../Style/login.css">

        <div class="LoginBody">

            <h3 class="LoginHeader">LOGIN</h3>
            
            <div class="LoginOptions">
                <div class="InputBody">
                    <input type="text" placeholder="Username" class="InputBox"> <br>
                    <input type="password" placeholder="Password" class="InputBox"><br>
                </div>

                <input type="checkbox" ID="remember" name="remember">
                <label for="remember" class="Remember">Remember me</label>
                <a href="#" class="Forget">Forgot password?</a>
            </div>

            <div class="LoginButtons">
                <ul>
                    <li> <a href="new_user.php" id="Butt_NewAcc">Create New Account</a> </li>
                    <li> <a href="#" id="Butt_Login">Login</a> </li>
                </ul>
            </div>

        </div>

<?php
    include_once '../Website/PHP/footer.php'
?>
