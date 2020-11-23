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

    $sql = "SELECT Antal FROM Varukorg WHERE ArtikelNr = '$artikel' && KundNr = '$_COOKIE['user']'";
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
        $sql = "UPDATE Varukorg SET Antal = ($row['Antal'] + $_POST['antal'])";
    }else{
        $sql = "INSERT INTO Varukorg(KundNr, ArtikelNr, Antal) 
        VALUES ('$_COOKIE["user"]','$artikel','$_POST[""]')";
    }

    
}


?>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="info">
        
        <?php
            include "connectDB.php";

            $artikel = $_GET['artikelnr'];

            $sql = "SELECT * FROM Vara WHERE ArtikelNr = '$artikel'";

            $result = $conn->query($sql);

            $row = $result->fetch_assoc();

            $conn->close();



        ?>

        <div class="text">
            <h1> <?php echo $row['ArtikelNamn'] ?> </h1>
            <p> <?php echo $row['Beskrivning'] ?> </p>

        </div>


        <div class="bild">
            <img src="<?php echo $row["Bild"] ?>" class="produktBild">
            <h2> <?php echo $row['Pris'] ?> kr </h2>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="antal">Antal:</label>
                <input type="number" id="antal" name="antal" value= "1">
                <input type="submit" value="KÖP"><br><br>
            </form>

        </div>
        

    </div>


        
    </div>

</body>


</html>
