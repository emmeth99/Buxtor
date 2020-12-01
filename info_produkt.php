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
        $message = "Du måste logga in för att handla.";
        echo "<script type='text/javascript'>alert('$message');</script>";
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
            <h4> <?php echo $row['Författare'] ?> </h4> <br>
            <p> <?php echo $row['Beskrivning'] ?> </p>

           
        </div>


        <div class="bild">
            <img src="<?php echo $row["Bild"] ?>" class="produktBild">
            <p> Betyg: <?php //echo $row['Betyg'] 
                $betyg = $row['Betyg'];
                while($betyg > 0){
                    echo "&#9733";
                    $betyg = $betyg-1;
                }
                $betyg = $row['Betyg'];
                while($betyg < 5){
                    echo "&#9734";
                    $betyg = $betyg+1;
                }
            
            
            ?> &nbsp Lagersaldo: <?php echo $row['Lagersaldo'] ?> </p>
            <h2> <?php echo $row['Pris'] ?> kr </h2>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="antal">Antal:</label>
                <input type="number" id="antal" name="antal" value= "1" min="1">
                <input type ="hidden" id="artikel" name="artikel" value= "<?php echo $artikel ?>">
                <input type="submit" value="KÖP"><br><br>
            </form>

        </div>
        
    <div class="kommentarer">
         <?php
            include "connectDB.php";

            //$artikel = $_GET['artikelnr'];
            $sql = "SELECT * FROM Kommentar WHERE ArtikelNr = '$artikel'";
            $result = $conn->query($sql);

            ?> 
            
                <p style="font-size:30px">Kommentarer:</p><br>

                <?php while($crow = $result->fetch_assoc()) { 
                    $kundnr = $crow['KundNr'];
                    $sql = "SELECT * FROM Konto Where KundNr = $kundnr";
                    $resultat = $conn->query($sql);
                    $grow = $resultat->fetch_assoc();
                    ?>
                    <p style="font-size:20px"><?php 
                        echo $grow['Förnamn']." ".$grow['Efternamn']." &nbsp &nbsp ";  
                        $betyg = $crow['Betyg'];
                        while($betyg > 0){
                            echo "&#9733";
                            $betyg = $betyg-1;
                        }
                        $betyg = $crow['Betyg'];
                        while($betyg < 5){
                            echo "&#9734";
                            $betyg = $betyg+1;
                        }
                        ?>
                     </p>

                    <p><?php echo $crow['Kommentaren'] ?></p><br>
                    <?php
                }
                ?>
        
            <?php
            $conn->close();
            ?>
        
    </div>
        

    </div>

    </div>

   

</body>




</html>
