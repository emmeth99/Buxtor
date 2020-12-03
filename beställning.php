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
            $summa = 0;

            echo $address.$postort.$postnr.$kaka." ";
            

            $sql = "SELECT * FROM Varukorg WHERE KundNr = $kaka";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
                echo "summa:".$summa;
                $artikel = $row['ArtikelNr'];
                $sql = "SELECT Pris FROM Vara WHERE ArtikelNr = '$artikel'";
                $result2 = $conn->query($sql);
                $row2 = $result2->fetch_assoc();
                $summa = $summa + ($row2['Pris'] * $row['Antal']);
            }


            $sql = "INSERT INTO Beställning(KundNr, Datum, Summa, 'Address', Postort, Postnr)
            VALUES($kaka, date('Y/m/d'), $summa, $address, $postort, $postnr)";
            $result = $conn->query($sql);

            
            
            
            $conn->close();
            
            ?>

        </div>


        
    </div>

</body>
</html>
