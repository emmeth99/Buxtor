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

            $adress = $_POST['adress'];
            $postort = $_POST['postort'];
            $postnr = $_POST['postnr'];
            $kaka = $_COOKIE['user'];
            $summa = $_POST['summa'];
            $date = date('Y/m/d');

            echo $adress. $postort.$postnr.$kaka.$summa;

            $sql = "INSERT INTO `Beställning`(`KundNr`, `Datum`, `Summa`, `Adress`, `Postort`, `Postnummer`) 
            VALUES($kaka, '$date', $summa, '$adress', '$postort', $postnr)";



if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


            $sql = "SELECT * FROM Varukorg WHERE KundNr = $kaka";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
                $artikel = $row['ArtikelNr'];
                $sql = "SELECT Pris FROM Vara WHERE ArtikelNr = '$artikel'";
                $result2 = $conn->query($sql);
                $row2 = $result2->fetch_assoc();
                
            }


            
            
            
            
            $conn->close();
            
            ?>

        </div>


        
    </div>

</body>
</html>
