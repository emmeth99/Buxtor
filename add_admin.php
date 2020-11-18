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
        <div class="skapa">
            <h2>Lägg till vara</h2>

            <form action="action_add_admin.php" method="post" enctype="multipart/form-data">
                <label for="name">Artikelnamn:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="pris">Pris:</label><br>
                <input type="text" id="pris" name="pris"><br>
                <label for="author">Författare:</label><br>
                <input type="text" id="author" name="author"><br>
                <label for="besk">Beskrivning:</label><br>
                <input type="text" id="besk" name="besk"><br><br>
  
                <label for="genre">Genre:</label>
                <select id="genre" name="genre">
                    <option value="deckare">Deckare</option>
                    <option value="romantik">Romantik</option>
                    <option value="fakta">Fakta</option>
                    <option value="humor">Humor</option>
                    <option value="fantasy">Fantasy</option></select><br><br>
    
                    Välj bild:
                <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload"><br><br>
  
    
                <input type="submit" value="Lägg till">
                </form> 

        </div>
    </div>


        
    </div>

</body>
</html>
