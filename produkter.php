<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Buxtor</title>
<link rel="stylesheet" href="produkter.css">
</head>
<body>
    
    <header>
        <h1>&#128024 <a href="index.php">Buxtor Bokhandel </a>&#9924</h1>
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
        <?php
            echo "PHP fuuunkaaar";
        ?>
    
        Produkter hääär!
        <?php
            include "connectDB.php";

            $sql = "SELECT * FROM test";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo $row["ArtikelNamn"]. " " .$row["Pris"]." " .$row["Författare"]. " " . 
                  $row["Beskrivning"]. ?> <img src="<?php $row["Bild"] ?>">  <?php"<br> <br>";
                }
              } else {
                echo "0 results";
            }


            $conn->close();
        ?>
    </div>


        
    </div>

</body>
</html>
