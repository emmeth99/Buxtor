<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">


<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/info_produkt.css">

</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="info">
        
        <?php
            include "connectDB";

            echo "hej";
            $tmp = $_GET['artikelnr'];

            $sql = "SELECT * FROM Vara WHERE ArtikelNr = '$tmp'";
            echo "222";
            $result = $conn->query($sql);
            echo "333";
            $row = $result->fetch_assoc();
            
            echo "44";
            $conn->close();

            echo "ååå";

        ?>

    </div>


        
    </div>

</body>


</html>
