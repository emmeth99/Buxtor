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
            include "connectDB.php";

            $tmp = $_GET['artikelnr'];

            $sql = "SELECT * FROM Vara WHERE ArtikelNr = '$tmp'";

            $result = $conn->query($sql);

            $row = $result->fetch_assoc();

            $conn->close();



        ?>

        <div class="text">
            <h1> <?php echo $row['ArtikelNamn'] ?> </h1>

        </div>


        <div class="bild">
            <img src="<?php echo $row["Bild"] ?>" class="produktBild">
            <h2> <?php echo $row['Pris'] ?> kr </h2>
        </div>
        

    </div>


        
    </div>

</body>


</html>
