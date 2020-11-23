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
        <div class="tabell">
        <table style="width:100%">
            <tr>
                <th></th>
                <p style="font-size:30px"><th>Titel</th>
                <th>Författare</th>
                <th>Pris</th></p>
                
            </tr>
            
            
            <?php
            include "connectDB.php";

            $sql = "SELECT * FROM Vara";
            $result = $conn->query($sql);

            
            while($row = $result->fetch_assoc()) { ?>

                <tr>
                    <td>  <img src="<?php echo $row["Bild"] ?>" class="produktBild"> </td>

                    <td> <p style="font-size:20px"><a href=" <?php echo "info_produkt.php?artikelnr=".$row['ArtikelNr'] ?> "> <?php echo $row["ArtikelNamn"] ?> </a></p> </td>
                    
                    <td> <?php echo $row["Författare"] ?> </td>
                    <td> <?php echo $row["Pris"] ?> kr </td>
                    

                </tr>

            <?php 
            }
            $conn->close();
        ?>


                
        </table>
        </div>
    </div>


        
    </div>

</body>
</html>
