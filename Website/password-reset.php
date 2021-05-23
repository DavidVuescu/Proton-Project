<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<link rel="stylesheet" href="../Style/reset.css">
<div class="LoginBody"> <form action="Includes/reset_request.inc.php" method="post">


    <h3 class="LoginHeader">PASSWORD RESET</h3>
    
    <div class="LoginOptions">

        <div class="InputBody">
            <input type="text" name="email" placeholder="Enter your E-mail" class="InputBox"> <br>
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
        <li> <button type="submit" name="Reset-Submit" id="Butt_Login">Send E-mail</button> </li>
    </ul> </div>


</form></div>

<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
