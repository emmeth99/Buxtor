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
            
        <table>
                <th> Ordernummer </th>
                <th> Datum </th>
                <th> Summa </th>
                <th> Adress </th>
                <th> Postort </th>
                <th> Postnr </th>

                <?php
                include "connectDB.php";

                $kaka = $_COOKIE['user'];
                $ordernr = $_GET['ordernr'];
                $sql = "SELECT * FROM Beställning WHERE OrderNr = '$ordernr'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc()
                
                
                ?>
                <tr>
                    <td> <?php echo $row["OrderNr"] ?> </td>
                    <td> <?php echo $row['Datum'] ?> </td>
                    <td> <?php echo $row['Summa'] ?>kr </td>
                    <td> <?php echo $row['Adress'] ?> </td>
                    <td> <?php echo $row['Postnummer'] ?> </td>
                    <td> <?php echo $row['Postort'] ?> </td>
                    
                </tr>
            </table>

            </table>
                <?php

                $sql = "SELECT BeställningVara.Antal, Vara.Pris, Vara.ArtikelNamn, Vara.Bild, Vara.ArtikelNr
                FROM BeställningVara
                INNER JOIN Vara ON BeställningVara.ArtikelNr=Vara.ArtikelNr
                WHERE BeställningVara.OrderNr = '$ordernr'";

                $result2 = $conn->query($sql);
                
                while($row2 = $result2->fetch_assoc()){

                    echo ", ".$row2['ArtikelNamn'];
                    

                }
                

                $conn->close();
                ?>

            </table>

        </div>
    </div>

</body>
</html>
