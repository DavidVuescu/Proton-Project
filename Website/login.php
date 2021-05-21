<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../Style/header.css">
        <link rel="stylesheet" href="../Style/login.css">

        <title>The Proton Project | Login</title>
    </head>


    <body>

        <header>
            <nav>
                <a href="landing.html"> <img src="../Images/The Proton Project Logo.png" class="Logo"> </a>
                <ul>
                    <li><a href="about_us.html" class="BenjaminButton"> About </a></li>
                    <li><a href="#" id="LoginID" class="BenjaminButton"> Account </a></li>
                </ul>
            </nav>
        </header>

        <div class="wrapper">
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
                        <li> <a href="new_user.html" id="Butt_NewAcc">Create New Account</a> </li>
                        <li> <a href="#" id="Butt_Login">Login</a> </li>
                    </ul>
                </div>

            </div>
        </div>

    </body>
    
</html>
