<?php
    session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/login.css">
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

            <h2> Hej! Du är en kund :)</h2>
            <button onclick="logout()">Logga ut</button>

        </div>
            
    </div>

</body>
</html>


<script>
    function logout() {
        <?php 
            setcookie("user", "", time() - 3600); 
            session_unset();
            session_destroy();
            //header("Location: http://92.32.39.21:8080/");
        ?>
    }
</script>