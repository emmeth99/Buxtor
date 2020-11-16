<!DOCTYPE html>
<meta charset="UTF-8">

<?php
    include "connectDB.php";

    $sql = "SELECT KundNr FROM Konto WHERE Email = $_POST['name']";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $cookie_name = "user";
    $cookie_value = $row['KundNr'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="css/login.css">
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

            

        </div>
            
    </div>

</body>
</html>
