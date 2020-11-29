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
    
    if(isset($_COOKIE['user']) && $_SESSION['rank'] == 'kund'){

        include "connectDB.php";
        $antal = $_POST["antal"];
        $kaka = $_COOKIE["user"];
        $artikel = $_POST["artikel"];

     
        $sql = "SELECT Antal FROM Varukorg WHERE (ArtikelNr = '$artikel' AND KundNr = '$kaka')";
        $result = $conn->query($sql);
        
        
        if($row = $result->fetch_assoc()){
            $plus = $row["Antal"] + $antal;
            $sql = "UPDATE Varukorg SET Antal = '$plus' WHERE (ArtikelNr = '$artikel' AND KundNr = '$kaka')";
            $result = $conn->query($sql);
        }else{       
            $sql = "INSERT INTO Varukorg(KundNr, ArtikelNr, Antal) 
            VALUES ('$kaka','$artikel','$antal')";
            $result = $conn->query($sql);
        }
        
        $conn->close();
        header("Location: http://92.32.39.21:8080/kassa.php");
    }else{
        $artikel = $_POST["artikel"];
        myalert();
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
                <input type="number" id="antal" name="antal" value= "1" min="1">
                <input type ="hidden" id="artikel" name="artikel" value= "<?php echo $artikel ?>">
                <input type="submit" value="KÖP"><br><br>
            </form>

        </div>
        

    </div>


        
    </div>

</body>




</html>
