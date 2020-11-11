<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="skapauser.css">
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
    <h2>Skapa användare</h2>

<form action="/action_page.php">
  <label for="fname">Förnamn:</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">Efternamn:</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="fname">Adress:</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">Postnr:</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="fname">Postadress:</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">Mobilnr:</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="fname">E-postadress</label>
  <input type="text" id="fname" name="fname">
  <label for="lname">Lösenord:</label>
  <input type="text" id="lname" name="lname"><br>
  <input type="submit" value="Skapa användare">
</form> 

<p>Genom att skapa en användare så äger vi dig.</p>
    </div>


        
    </div>

</body>
</html>
