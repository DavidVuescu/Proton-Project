<?php
    include_once '../Website/PHP/header.php'
?>
<!-- <div class="wrapper"> -->

<link rel="stylesheet" href="../Style/admin.css">

<h3 class="HeaderText">Admin Panel</h3>

<div class="AdminBody">
<table class="table">
    <thead>
        <tr>
            <th>UUID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <?php
                include_once('Includes/dbh.inc.php');
                $query = $linkDB->query("SELECT * FROM users ORDER by usersID");

                while($row = $query->fetch_array())
                {
                    echo "<tr>";
                    echo "<td>".$row['usersID']."</td>";
                    echo "<td>".$row['usersNAME']."</td>";
                    echo "<td>".$row['usersEMAIL']."</td>";
                    echo "<td>".$row['usersPASS']."</td>";
                    echo "</tr>";
                }
            ?>
        </tr>
    </tbody>

    <div class="Commands">
        <?php 
            if(isset($_GET["succes"]))
            {
                echo "<h2>User deleted successfully</b></h2>";  
            }
            else if (isset($_GET["error"]))
            {
                echo "<h4>Unexpected error appeared</b></h4>";  
            }
        ?>

        <form action="Includes/root_delete.inc.php" method="post">

            <input type="text" name="delID" placeholder="Choose ID" class="InputBox" required> </br>
            <button type="submit" name="Submit" class="Butt_Delete">Delete user</button>
        </form>
    </div>

</div>


<!-- </div> -->
<?php
    include_once '../Website/PHP/footer.php'
?>
