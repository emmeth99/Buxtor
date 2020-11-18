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

            <h2> Hej! Du är en kund :)</h2>
            <form method="post" action="logout.php">
                    <button type="submit">Logga ut</button>
            </form>

        </div>
            
    </div>

</body>
</html>


