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


    <div class="nav2">
        <ul class="nav2-ul">
            <li class="nav2-li"> <a class="nav2-lia" href="kategorier.php?genre=">Deckare</a> </li>
            <li class="nav2-li"> <a class="nav2-lia" href="#news">Fakta</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="#contact">Fantasy</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="#about">Humor</a></li>
            <li class="nav2-li"> <a class="nav2-lia" href="#about">Romantik</a></li>
        </ul>
    
    </div>

    <div class="bild">
    

        <br>
        <br>
        <div class="tabell">
        <table style="width:100%"><tr>
                <th></th>
                <th style="font-size:30px">Titel</th>
                <th style="font-size:30px">Författare</th>
                <th style="font-size:30px">Pris</th>
                
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
