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
                if($_SESSION == 'admin'){

                ?>
                <h2>Utplåna vara</h2>

                <form action="action_delete_admin.php" method="post">
                <label for="article">Artikelnr:</label><br>
                <input type="number" id="article" name="article"><br><br>
                <input type="submit" value="Förinta">
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
