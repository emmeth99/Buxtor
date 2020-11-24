<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/kassa.css">

</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="varukorg">
        <h3> Varukorg </h3>

        <table>
            <tr>
                <th>ArtikelNamn</th>
                <th>Pris/styck</th>
                <th>Antal</th>
            </tr>
            
            <?php

            include "connectDB.php";
            $kaka = $_COOKIE["user"];
            $sql = "SELECT * FROM Varukorg WHERE KundNr = '$kaka'";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) { 
                $artikel = $row["ArtikelNr"];
                $sql2 = "SELECT * FROM Vara WHERE ArtikelNr = '$artikel'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();
                ?>
                
            <tr>
                <td> <?php echo $row2['ArtikelNamn'] ?> </td>
                <td> <?php echo $row2['Pris'] ?> </td>
                <td> <input type="number" id="antal" name="antal" min="1" value="<?php echo $row['Antal'] ?>"> </td>
            </tr>
            <?php 
            }
            $conn->close();

            
            ?>
        </table>


    </div>


        
    </div>

</body>


</html>
