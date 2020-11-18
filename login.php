<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <?php include "header.php" ?>
    

    <?php include "navbar.php" ?>

    
    <div class="container">

        <div class="bild">

            <div class="login"> 
                <h2>Logga in</h2>

                <form action="minsida.php" method="post">
                <label for="email">E-postadress:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="pwd">Lösenord:</label><br>
                <input type="password" id="pwd" name="pwd"><br><br>
                <input type="submit" value="Logga in">
                </form> 

                <p><a href="skapauser.php">Ingen användare? Skapa en här!</a></p>
            </div>

        </div>
            
    </div>

</body>
</html>
