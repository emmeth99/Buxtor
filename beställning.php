<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/beställning.css">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>


    <div class="container">

    <div class="bild">

        <div class="info">
            
            <?php 
            
            include "connectDB.php";

            $adress = $_POST['adress'];
            $postort = $_POST['postort'];
            $postnr = $_POST['postnr'];
            $kaka = $_COOKIE['user'];
            $summa = $_POST['summa'];
            $date = date('Y/m/d');


            $sql = "INSERT INTO `Beställning`(`KundNr`, `Datum`, `Summa`, `Adress`, `Postort`, `Postnummer`) 
            VALUES($kaka, '$date', $summa, '$adress', '$postort', $postnr)";

            
            $conn->query($sql);
            


            $sql = "SELECT OrderNr FROM Beställning ORDER BY OrderNr DESC";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $ordernr = $row['OrderNr'];

            ?>
            <h1> Tack för din beställning! </h1>
            <h4> Orderdetaljer:  </h4>
            <p>Ordernummer: <?php echo $ordernr ?> </p>
            <p>Datum: <?php echo $date ?> </p>
            <p>Summa: <?php echo $summa ?>kr </p>
            <p>Adress: <?php echo $adress ?> </p>
            <p>Postnr: <?php echo $postnr." ".$postort ?> </p>

        </div>

        <div class="varor">

            <table>
                <th> Artikel </th>
                <th> Pris </th>
                <th> Antal </th>
                <?php


                $sql = "SELECT * FROM Varukorg WHERE KundNr = $kaka";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    $artikel = $row['ArtikelNr'];
                    $antal = $row['Antal'];

                    $sql = "SELECT * FROM Vara WHERE ArtikelNr = $artikel";
                    $result2 = $conn->query($sql);
                    $row2 = $result2->fetch_assoc();

                    $pris = $row2['Pris'];

                    $conn->autocommit(FALSE);
                    $sql = "INSERT INTO `BeställningVara`(`OrderNr`, `ArtikelNr`, `Antal`, `Pris`) 
                    VALUES ('$ordernr', '$artikel', '$antal', '$pris')";
                    $result3 = $conn->query($sql);

                    ?>
                        <tr> 
                            <td> <?php echo $row2['ArtikelNamn']?> </td>
                            <td> <?php echo $row2['Pris']?> </td>
                            <td> <?php echo $row['Antal']?> </td>
                        </tr>

                    <?php    

                    $sql = "DELETE FROM Varukorg WHERE KundNr = '$kaka'";
                    $result4 = $conn->query($sql);

                    if($result3 && $result4){
                        $conn->commit();
                    }else{
                        $conn->rollback();
                        $message = "Något gick fel, vänligen försök igen";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    $conn->autocommit(TRUE);

                }


                
                
                
                
                $conn->close();
                
                ?>
            </table>

            </div>


    </div>  
    </div>

</body>
</html>
