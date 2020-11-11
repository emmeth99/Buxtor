<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/produkter.css">
</head>
<body>
    
    <?php include "header.php" ?>

    

    <nav class="navbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Kategorier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Författare</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="#">Kassa</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="login.php">Logga in</a>
            </li>
        </ul>
        
    </nav>
    <div class="container">

    <div class="bild">
        <?php
            echo "PHP fuuunkaaar";
        ?>
    

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
                    <td> <?php echo $row["ArtikelNamn"] ?> </td>
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
