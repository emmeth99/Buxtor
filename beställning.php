<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/betalning.css">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>


    <div class="container">

        <div class="bild">
            <?php 
            
            include "connectDB.php";

            $address = $_POST['address'];
            $postort = $_POST['postort'];
            $postnr = $_POST['postnr'];
            $kaka = $_COOKIE['user'];
            

            $sql = "SELECT * FROM Varukorg WHERE KundNr = $kaka";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            

            $summa = $row['']

            $sql = "INSERT INTO Beställning(KundNr, )
            VALUES($kaka, )";
            
            
            
            $conn->close();
            
            ?>

        </div>


        
    </div>

</body>
</html>
