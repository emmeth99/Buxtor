<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/update_admin.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article = $_POST["article"];
}


if(isset($article)){
    include "connectDB.php";
    $sql = "SELECT * FROM Vara Where ArtikelNr = '$article'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
}

?>
    
    <?php include "header.php" ?>
    

    <?php include "navbar.php" ?>
    
    <div class="container">

    

    <div class="bild">
        <?php 
        if($_SESSION['rank'] == 'admin'){

        ?>
            <div class="skapa">
                <h2>Redigera vara</h2>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="article">Artikelnr:</label><br>
                    <input type="number" id="article" name="article" required><br>
                    <input type="submit" value="Hämta"><br><br>
                </form>

                <form action="action_update_admin.php" method="post">
                    <label for="article">Artikelnr:</label><br>
                    <input type="text" id="article" name="article" value = '<?php echo $row["ArtikelNr"] ?>'><br>
                    <label for="name">Artikelnamn:</label><br>
                    <input type="text" id="name" name="name" value = '<?php echo $row["ArtikelNamn"] ?>'><br>
                    <label for="pris">Pris:</label><br>
                    <input type="number" id="pris" name="pris" value= <?php echo $row["Pris"] ?>><br>
                    <label for="author">Författare:</label><br>
                    <input type="text" id="author" name="author" value= '<?php echo $row["Författare"] ?>'><br>
                    <label for="saldo">Lagersaldo:</label><br>
                    <input type="number" id="saldo" name="saldo" value= '<?php echo $row["Lagersaldo"] ?>'><br>
                    <label for="besk">Beskrivning:</label><br>
                    <input type="text" name="besk" id="besk" size="69" value= '<?php echo $row["Beskrivning"] ?>'><br><br>
    
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre">
                    <option value="">--Välj--</option>
                        <option value="deckare">Deckare</option>
                        <option value="romantik">Romantik</option>
                        <option value="fakta">Fakta</option>
                        <option value="humor">Humor</option>
                        <option value="fantasy">Fantasy</option></select><br><br>
    
        
                    <input type="submit" value="Redigera">
                    </form> 

            </div>
        <?php
        }else{
        ?>
            <h1> Du är inte admin! &#128545</h1>

        <?php
        }   
        ?>
    </div>


        
    </div>

</body>
</html>