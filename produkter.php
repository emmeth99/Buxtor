<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/produkter.css">
</head>
<body>
    
    <?php include "header.php" ?>
    <?php include "navbar.php" ?>

    <div class="container">

    <div class="bild">
    

        <br>
        <br>

        <table style="width:100%">
            <tr>
                <th></th>
                <th>Titel</th>
                <th>Författare</th>
                <th>Pris</th>
                <th>Beskrivning</th>
            </tr>
            
            
            <?php
            include "connectDB.php";

            $sql = "SELECT * FROM Vara";
            $result = $conn->query($sql);

            
            while($row = $result->fetch_assoc()) { ?>

                <tr>
                    <td>  <img src="<?php echo $row["Bild"] ?>" class="produktBild"> </td>

                    <td> <a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    <td> <?php echo $row["Beskrivning"] ?> </td>

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
