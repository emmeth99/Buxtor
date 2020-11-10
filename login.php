<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        
        <img src="images/logo.jpg" class="logo" >
        <h1><a href="index.php" class="title">BUXTOR BOKHANDEL</a></h1>
    </header>
    

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
        <h2>Logga in</h2>

<form action="/action_page.php">
  <label for="fname">E-postadress:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Lösenord:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Logga in">
</form> 

<p><a href="/skapauser.html">Ingen användare? Skapa en här!</a></p>
    </div>


        
    </div>

</body>
</html>
