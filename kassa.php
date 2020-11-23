<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/index.css">

</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="varukorg">
        <h3> Varukorg </h3>

        <table>
            <tr>
                <th>ArtikelNr</th>
                <th>Antal</th>
            </tr>
            
            <?php

            include "connectDB.php";
            $kaka = $_COOKIE["user"];
            $sql = "SELECT * FROM Varukorg WHERE KundNr = '$kaka'";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td> <?php echo $row['ArtikelNr'] ?> </td>
                <td> <?php echo $row['Antal'] ?> </td>
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
