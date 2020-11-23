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



<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include "connectDB.php";
    $sql = "INSERT INTO `Varukorg`(`Förnamn`, `Efternamn`, `Email`, `Rank`, `Lösenord`) 
    VALUES ('$fname','$lname','$email','kund','$pwd')";
}


?>
    
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
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="pris">Antal:</label>
                <input type="number" id="antal" name="antal" value= "1">
                <input type="submit" value="KÖP"><br><br>
            </form>

        </div>
        

    </div>


        
    </div>

</body>


</html>
