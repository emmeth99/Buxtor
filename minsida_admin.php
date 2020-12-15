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
                <?php 
                if($_SESSION['rank'] == 'admin'){

                ?>

                <h1> Välkommen boss! </h1>
                <a href="article_list_admin.php"> Artiklar </a>   <br>
                <a href="add_admin.php"> Lägga till varor </a>   <br>
                <a href="update_admin.php"> Redigera varor</a>   <br> 
                <a href="delete_admin.php"> Ödelägga varor</a>   <br><br>
                <a href="kunder_admin.php"> Kundlista</a>   <br>
                <a href="delete_kunder_admin.php"> Undanröja kunder</a>   <br>

                <form method="post" action="logout.php">
                    <button type="submit">Logga ut</button>
                </form>
                <?php
                }else{
                ?>
                    <h1> Du är inte admin! &#128545</h1>

                <?php
                }   
                ?>
            </div>

        </div>
            
    </div>


</body>
</html>





