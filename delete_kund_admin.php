<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/delete.css">
</head>
<body>
    
    <?php include "header.php" ?>
    

    <?php include "navbar.php" ?>

    
    <div class="container">

        <div class="bild">

            <div class="delete"> 
                <?php 
                if($_SESSION['rank'] == 'admin'){

                ?>
                <h2>Assassinera kund</h2>

                <form action="action_delete_kund_admin.php" method="post">
                <label for="kund">Kundnummer:</label><br>
                <input type="number" id="kund" name="kund" min="2"><br><br>
                <input type="submit" value="Avrätta">
                </form> 

            </div>
            <?php
                }else{
                ?>
                    <h1> Du är inte admin! &#128545</h1>

                <?php
                }   
                ?>

        </div>
            
    </div>

</body>
</html>
