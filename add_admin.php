<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/add_admin.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    <div class="container">

    <div class="bild">
        <?php 
        if($_SESSION['rank'] == 'admin'){

        ?>
            <div class="skapa">
                <h2>Lägg till vara</h2>

                <form action="action_add_admin.php" method="post" enctype="multipart/form-data">
                    <label for="name">Artikelnamn:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="pris">Pris:</label><br>
                    <input type="number" id="pris" name="pris" required><br>
                    <label for="author">Författare:</label><br>
                    <input type="text" id="author" name="author" required><br>
                    <label for="saldo">Lagersaldo:</label><br>
                    <input type="number" id="saldo" name="saldo" min="0"required><br>
                    <label for="besk">Beskrivning:</label><br>
                    <input type="text" id="besk" name="besk" required><br><br>
    
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre" required>
                        <option value="deckare">Deckare</option>
                        <option value="romantik">Romantik</option>
                        <option value="fakta">Fakta</option>
                        <option value="humor">Humor</option>
                        <option value="fantasy">Fantasy</option></select><br><br>
        
                        Välj bild:
                    <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload" required><br><br>
    
        
                    <input type="submit" value="Lägg till">
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
