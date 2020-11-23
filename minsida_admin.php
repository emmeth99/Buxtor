<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/minsida_admin.css">
</head>
<body>
    
    <?php include "header.php" ?>

    <?php include "navbar.php" ?>


    <div class="container">

        <div class="bild">

            <div class="admin">
                <h1> AAAAAAAAAAAAAAAAa </h1>
                <a href="add_admin.php"> Lägg till varor </a>   <br>
                <a href="update_admin.php"> Redigera varor</a>   <br> <br>

                <form method="post" action="logout.php">
                    <button type="submit">Logga ut</button>
                </form>
            </div>

        </div>
            
    </div>


</body>
</html>





