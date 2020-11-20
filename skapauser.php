<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/skapauser.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <?php include "navbar.php" ?>

    
    <div class="container">

    <div class="bild">
        <div class="skapa">
            <h2>Skapa användare</h2>

            <form action="/action_skapauser.php" method="post">
                <label for="fname">Förnamn:</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Efternamn:</label>
                <input type="text" id="lname" name="lname"><br>
                <label for="email">E-postadress</label>
                <input type="email" id="email" name="email">
                <label for="pwd">Lösenord:</label>
                <input type="password" id="pwd" name="pwd"><br>
                <input type="submit" value="Skapa användare">
            </form> 

            <p>Genom att skapa en användare så äger vi dig.</p>
        </div>
    </div>


        
    </div>

</body>
</html>
