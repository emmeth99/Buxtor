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
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
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
