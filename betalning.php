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
    

    <nav class="navbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Kategorier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produkter.php">Författare</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="#">Kassa</a>
            </li>
            <li class="nav-item2">
                <a class="nav-link" href="login.php">Logga in</a>
            </li>
        </ul>
        
        
    </nav>
    <div class="container">

    <div class="bild">
    <div class="betalning">
    <h2>Betalning</h2>

        <form action="/action_page.php">
             <label for="fname">Adress:</label>
             <input type="text" id="fname" name="fname">
             <label for="lname">Postnr & Ort:</label>
             <input type="text" id="lname" name="lname"><br>
             <label for="fname">Kortnr:</label>
             <input type="text" id="fname" name="fname">
             <label for="lname">CVC/CVV:</label>
             <input type="text" id="lname" name="lname"><br>
             <input type="submit" value="Skapa användare">
        </form> 

    <p>Genom att genomföra köpet godkänner du att du ger oss pengar och får troligtvis inget tillbaka.</p>
    </div>
    </div>


        
    </div>

</body>
</html>
